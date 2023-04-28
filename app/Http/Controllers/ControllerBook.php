<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class ControllerBook extends Controller
{
    public function index()
    {
        $books = Book::all();

        $data = [
            'books' => $books
        ];

        return view('books.index', $data);
    }

    public function create()
    {
        return view('books.create');
    }

    public function show(Book $book)
    {
        // dd($book);
        return view('books.show', compact('book'));
    }

    public function edit(Book $book)
    {

        return view('books.edit', compact('book'));
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

        $new_book= Book::create($validatedData);
        return to_route('books.show',$new_book);
    }
}
