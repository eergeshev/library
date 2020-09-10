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
        $languages = \App\Language::all();
        return view('book.create', compact('languages'));
    }

    public function store()
    {
        
        $data = request()->validate([
            'title' => 'required',
            'description' => 'required',
            'isbn' => 'required',
            
        ]);
        
        // $form_data = array(
        //     'title' => $data['title'],
        //     'isbn' => $data['isbn'],
        //     'description' => $data['description'],
        //     'language_id' =>$data['language_id'],
        // );

       

        Book::create($data);

        return redirect('/book');

    }

    public function edit($id)
    {
        $book = Book::find($id);
        return view('book.edit', compact('book'));
    }

    public function update($id)
    {
        
        $dat_update = Book::findOrFail($id);
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

        $dat_update->update($form_data);

        return redirect('/book');

    }

    public function delete($id)
    {
        
        $data = Book::findOrFail($id);
        $data->delete();

        return redirect()->back();
    }




}
