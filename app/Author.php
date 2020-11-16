<?php

namespace App;

use App\Author;
use App\Book;
use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    protected $guarded = [];

    public function books()
    {
        return $this->belongsToMany(Book::class);
    }
}
