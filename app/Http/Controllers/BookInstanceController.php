<?php

namespace App\Http\Controllers;
use App\Loan;
use App\Book;
use App\User;
use Illuminate\Http\Request;

class BookInstanceController extends Controller
{
    public function index()
    {
        $insta = Loan::all();

        return view('bookinstance.index', compact('insta'));
    }

    public function create()
    {
        $books = Book::all();
        $users = User::all();

        $statuses = [
            'm' => 'maintenance',
            'l' => 'lend',
            'a' => 'available',
            'r' => 'reserved',
        ];
        return view('bookinstance.create', compact('books', 'statuses', 'users'));
    }

    public function store(Request $request)
    {
        $book_id = $request->input('book');
        $book = \App\Book::find($book_id);

        $bookinstance = new Loan();
//        $data = request()->validate([
//            'due_back' => '',
//            'status' => 'required',
//            ]);



//        $bookinstance->due_back = $data['due_back'];
        $bookinstance->status = 'available';

       
        $book->book_instances()->save($bookinstance);
        return redirect('/bookinstances');

    }
}
