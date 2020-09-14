<?php

namespace App\Http\Controllers;

use App\Genre;
use Illuminate\Http\Request;

class GenreController extends Controller
{
    public function index()
    {
        $genres = Genre::all();

        return view('genre.index', compact('genres'));

    }

    public function store()
    {
        $data = request()->validate([
            'name'=>'required'
        ]);
        
        Genre::create($data);
        return redirect('/genre');
    }

    public function destroy($id)
    {
        $data = Genre::findOrFail($id);
        $data->delete();

        return redirect()->back();
    }
}
