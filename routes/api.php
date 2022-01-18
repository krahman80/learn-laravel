<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->prefix('v1')->group(function(){
    Route::get('/user', function(Request $request){
        return $request->user();
    });

    // Route::get('/authors','AuthorsController@index');
    // Route::get('/authors/{author}', 'AuthorsController@show');
    Route::apiResource('authors','AuthorsController');
    Route::apiResource('books','BooksController');
    
    Route::get('books/{book}/relationships/authors', 'BooksAuthorsRelationshipsController@index')->name('books.relationships.authors');
    
    Route::get('books/{book}/authors', 'BooksAuthorsRelatedController@index')->name('books.authors');
});
