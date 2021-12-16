<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('upload', function() {
    return view('upload');
})->name('upload');

Route::post('upload', function(Request $request) {
    if($request->hasfile('fileUpload')){
        $file = $request->file('fileUpload');
        $name = $file->getClientOriginalName();
        $file->move('images/upload',$name);
    }
    return redirect()->route('upload');
})->name('file.upload');