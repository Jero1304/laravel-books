<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Genre;
use Illuminate\Http\Request;

class ControllerBook extends Controller
{
    public function index()
    {
        $genres = Genre::get()->pluck('name');
        $books = Book::all();


        return view('books.index', compact('books', 'genres'));
    }

    public function create()
    {
        $genres = Genre::orderBy('name', 'asc')->get();

        return view('books.create', compact('genres'));
    }

    public function show(Book $book)
    {
        $genres = Genre::get()->pluck('name');


        // dd($genres);
        return view('books.show', compact('book', 'genres'));
    }

    public function edit(Book $book)
    {
        $genres = Genre::orderBy('name', 'asc')->get();

        return view('books.edit', compact('book', 'genres'));
    }


    public function update(Request $request, Book $book)
    {

        $data = $request->all();

        $book->titolo = $data['titolo'];
        $book->autore = $data['autore'];
        $book->casa_editrice = $data['casa_editrice'];
        $book->isbn = $data['isbn'];
        $book->copie = $data['copie'];
        $book->pagine = $data['pagine'];

        $book->save();

        return to_route('books.show', $book);
    }

    public function store(Request $request)
    {

        $validatedData = $request->validate([
            'titolo' => 'required|max:255',
            'autore' => 'required|max:255',
            'casa_editrice' => 'max:200',
            'isbn' => 'required|max:13',
            'copie' => 'numeric|required|min:1',
            'pagine' => 'numeric|min:1',
        ]);

        $new_book = Book::create($validatedData);
        return to_route('books.show', $new_book);
    }
}