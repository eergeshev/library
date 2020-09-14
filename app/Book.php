<?php

namespace App;

use App\Language;
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
}
