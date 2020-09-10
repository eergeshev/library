<?php

namespace App\Http\Controllers;

use App\Language;
use Illuminate\Http\Request;

class LanguageController extends Controller
{

    public function index()
    {
        $languages = Language::all();

        return view('book.language.index', compact('languages'));

    }

    public function store()
    {
        $data = request()->validate([
            'name'=>'required'
        ]);

        language::create($data);
        return redirect('/language');
    }

    public function destroy($id)
    {
        $data = Language::findOrFail($id);
        $data->delete();

        return redirect()->back();
    }
}
