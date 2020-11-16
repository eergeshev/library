<?php

namespace App;
use App\Book;
use App\User;
use Illuminate\Database\Eloquent\Model;

class Loan extends Model
{
    public function book()
    {
        return $this->belongsTo(Book::class);
    }

    public function user()
    {
        return $this->belongsToMany(User::class);
    }
}
