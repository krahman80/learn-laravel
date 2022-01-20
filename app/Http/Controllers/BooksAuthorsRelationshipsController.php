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

    public function update(Request $request, Book $book)
    {
        $ids = $request->input('data.*.id');
        $book->authors()->sync($ids);
        return response(null, 204);
    }
}
