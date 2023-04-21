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
        dd($book);
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

        return view('books.show', $book);
    }

    public function store(Request $request)
    {
        $new_book = new Book;
        $data = $request->all();

        $new_book->titolo = $data['titolo'];
        $new_book->autore = $data['autore'];
        $new_book->casa_editrice = $data['casa_editrice'];
        $new_book->isbn = $data['isbn'];
        $new_book->copie = $data['copie'];
        $new_book->pagine = $data['pagine'];

        $new_book->save();

        return view('books.show', $new_book);
    }
}