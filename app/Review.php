<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Book;

class Review extends Model
{
    protected $fillable = ['review'];

    public function books(){
        return $this->belongsTo(Book::class);
    }
}
