<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\ResourceCollection;

class BooksCollection extends ResourceCollection
{
    // public $collects = BooksResource::class;

    public function toArray($request)
    {
        return [
            'data' => $this->collection,
        ]
    }
}
