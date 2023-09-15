<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Book extends Controller
{
    public function booklist()
    {
        $books = \App\Models\Book::all();
        return view('booklist', ['books' => $books]);
    }
    public function book($id)
    {
        $book = \App\Models\Book::find($id);
        return view('book', ['book' => $book]);
    }
}
