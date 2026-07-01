<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index()
    {
        // Recuperiamo tutti i record dalla tabella books
        $books = Book::all();

        // Passiamo i dati alla vista 'books.index'
        return view('books.index', compact('books'));
    }
}