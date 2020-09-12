<?php

namespace App\Http\Controllers;

use App\Book;
use App\Language;
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

    public function store(Request $request)
    {
        $lang_ids = $request->input('languages');
        $languages = \App\Language::find($lang_ids);

        $book = new Book();
        $data = request()->validate([
            'title' => 'required',
            'description' => 'required',
            'isbn' => 'required',
        ]);

        $book->title = $data['title'];
        $book->isbn = $data['isbn'];
        $book->description = $data['description'];
        $book->save();
        $book->languages()->attach($languages);

        return redirect('/books');

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

        return redirect('/books');

    }

    public function delete($id)
    {
        
        $data = Book::findOrFail($id);
        $data->delete();

        return redirect()->back();
    }

  

        
    




}
