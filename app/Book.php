<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Author;
use App\Review;

class Book extends Model
{
    protected $fillable = [
        'title',
        'description',
        'publication_year',
    ];
    
    public function authors(){
        return $this->belongsToMany(Author::class);
    }

    public function Reviews() {
        return $this->hasMany(Review::class);
    }
}
