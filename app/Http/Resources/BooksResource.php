<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class BooksResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id' => (string)$this->id,
            'type' => 'books',
            'attributes' => [
                'title' => $this->title,
                'description' => $this->description,
                'publication_year' => $this->publication_year,
                'created_at' => $this->updated_at,
                'updated_at' => $this->updated_at,
            ],
            'relationships' => [
                'authors' => [
                    'links' => [
                        'self' => route('books.relationships.authors', ['id' => $this->id]),
                        'related' => route('books.authors', ['id' => $this->id],
                        'data' => AuthorsIdentifierResource::collection($this->authors))
                    ],
                ]
            ]
        ];
    }
}
