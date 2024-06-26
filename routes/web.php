<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    $comics = config('db.comics');
    return view('home', compact("comics"));
})->name('home');

/* single product */
Route::get('/{coordinate}', function ($coordinate) {
    $comics = config('db.comics');
    if (array_key_exists($coordinate, $comics)){
        $selectedComic = $comics[$coordinate];
        return view('product', compact('selectedComic'));
    } else {
        abort(404);
    }
})->name('product');
