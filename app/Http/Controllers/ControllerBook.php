<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Genre;
use Illuminate\Http\Request;
use App\Models\Author;

class ControllerBook extends Controller
{
    public function index(Request $request)
    {
        $trashed = $request->input('trashed');

        if ($trashed) {
            $books = Book::onlyTrashed()->get();
        } else {
            $books = Book::all();
        }

        $num_of_trashed = Book::onlyTrashed()->count();


        return view('books.index', compact('books', 'num_of_trashed'));
    }

    public function create()
    {
        $genres = Genre::all();
        $authors = Author::all();
        return view('books.create', compact('authors', 'genres'));
    }
    public function show(Book $book)
    {
        // dd($book);
        return view('books.show', compact('book'));
    }

    public function edit(Book $book)
    {
        $genres = Genre::get();
        $authors = Author::orderBy('name', 'asc')->get();
        return view('books.edit', compact('book', 'authors', 'genres'));
    }


    public function update(Request $request, Book $book)
    {
        $data = $request->all();

        $book->titolo = $data['titolo'];
        $book->casa_editrice = $data['casa_editrice'];
        $book->isbn = $data['isbn'];
        $book->copie = $data['copie'];
        $book->pagine = $data['pagine'];

        $book->save();

        if (isset($data['authors'])) {
            $book->authors()->sync($data['authors']);
        } else {
            $book->authors()->sync([]);
        }

        return to_route('books.show', $book);
    }

    public function store(Request $request)
    {
        $validateData = $request->validate([
            'titolo' => 'required|max:255',
            'casa_editrice' => 'max:200',
            'isbn' => 'required|max:13',
            'copie' => 'numeric|required|min:1',
            'pagine' => 'numeric|min:1',
            'genre_id' => 'required|exists:genres,id',
            'authors' => 'required|exists:authors,id'
        ]);

        $new_book = Book::create($validateData);
        if (isset($validateData['authors'])) {
            $new_book->authors()->attach($validateData['authors']);
        }
        return to_route('books.show', $new_book);
    }

    public function restore(Request $request, Book $book)
    {
        if ($book->trashed()) {
            $book->restore();
        }

        return bacK();
    }
    
    public function destroy(Book $book)
    {
        if ($book->trashed()) {
            $book->forceDelete(); // eliminazione def
        } else {
            $book->delete(); //eliminazione soft
        }
        return back();
    }
}