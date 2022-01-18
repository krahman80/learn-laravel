<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Review;
use App\Book;
use Faker\Generator as Faker;

$factory->define(Review::class, function (Faker $faker) {
    return [
        'review' => $faker->paragraph(),
        'book_id' => Book::all()->random()->id,
    ];
});
