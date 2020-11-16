<?php

namespace App;

use App\Author;
use App\Language;
use App\Loan;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $guarded = [];

    public function languages()
    {
        return $this->belongsToMany(Language::class);
    }

    public function genres()
    {
        return $this->belongsToMany(Genre::class);
    }

    public function authors()
    {
        return $this->belongsToMany(Author::class);
    }
    
    public function book_instances()
    {
        return $this->hasMany(Loan::class);
    }

}
