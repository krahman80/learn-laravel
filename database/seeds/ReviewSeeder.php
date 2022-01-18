<?php

use Illuminate\Database\Seeder;
use App\Review;
use App\Book;

class ReviewSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // factory(Review::class,3)->create();
        Book::all()->each(function(Book $book) {
            factory(Review::class)->create([
                'book_id' => $book->id
            ]);
        });
    }
}