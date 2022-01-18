<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Book;
use App\Http\Resources\AuthorsIdentifierResource;

class BooksAuthorsRelationshipsController extends Controller
{
    public function Index(Book $book)
    {
        return AuthorsIdentifierResource::collection($book->authors);
    }
}
