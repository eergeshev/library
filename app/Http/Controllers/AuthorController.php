<?php

namespace App\Http\Controllers;

use App\Author;
use App\Book;
use Illuminate\Http\Request;

class AuthorController extends Controller
{
    public function index(){
        $authors = Author::all();

        return view('author.index', compact('authors'));

    }
    
    public function create(){
        $books = Book::all();

        return view('author.create', compact('books'));

    }

    public function store(Request $request){
        
        $book_ids = $request->input('books');
        $books = Book::find($book_ids);

      
       
        $data = request()->validate([
            'name' => 'required',
            'birth_date' => 'required',
            'dead_date' => 'required',
            'bio' => 'required',

        ]);
         
       $author = Author::create($data); 
              
        $author->books()->attach($books);
      

        return redirect('/authors');
    }
}
