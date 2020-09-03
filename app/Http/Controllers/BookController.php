<?php

namespace App\Http\Controllers;

use App\Book;
use Illuminate\Http\Request;


class BookController extends Controller
{
    public function index() 
    {
        $books = Book::all();
        return view('book.index', compact('books'));
    }

    public function create()
    {
        return view('book.create');
    }

    public function store()
    {
        
        $data = request()->validate([
            'title' => 'required',
            'description' => 'required',
            'isbn' => 'required',
        ]);

        $form_data = array(
            'title' => $data['title'],
            'isbn' => $data['isbn'],
            'description' => $data['description'],
        );

        Book::create($form_data);

        return redirect('/book');

    }
}
