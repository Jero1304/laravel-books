<?php

namespace App\Http\Controllers;
use App\Models\Book;
use Illuminate\Http\Request;

class ControllerBook extends Controller
{
    public function index(){
        $books = Book::all();

        $data = [
            'books' => $books
        ];

        return view('welcome', $data);
    }
}
