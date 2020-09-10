<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Language extends Model
{
    protected $guarded = [];
    
    protected $fillable = [
        'name'
    ];

    public function books()
    {
        return $this->belongsToMany(Book::class);
    }
}
