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
        $genres = \App\Genre::all();
        return view('book.create', compact('languages','genres'));
    }

    public function store(Request $request)
    {
        $lang_ids = $request->input('languages');
        $languages = \App\Language::find($lang_ids);

        $genre_ids =  $request->input('genres');
        $genres = \App\Genre::find($genre_ids);


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
        $book->genres()->attach($genres);

        return redirect('/books');

    }

    public function edit($id)
    {
        $languages = \App\Language::all();
        $genres = \App\Genre::all();
        $book = Book::find($id);
        return view('book.edit', compact('book', 'languages', 'genres'));
    }

    public function update(Request $request, $id)
    {
        $lang_ids = $request->input('languages');
        $languages = \App\Language::find($lang_ids);

        $genre_ids =  $request->input('genres');
        $genres = \App\Genre::find($genre_ids);


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

        $dat_update->languages()->sync($languages);
        $dat_update->genres()->sync($genres);

        return redirect('/books');

    }

    public function book_detail($id){
        $book = Book::findOrFail($id);

        return view('book.book', compact('book'));

    }

    public function delete($id)
    {

        $data = Book::findOrFail($id);
        $data->delete();

        return redirect()->back();
    }









}
