<?php

use Illuminate\Support\Facades\Route;
use App\Comic;

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
    return view('home');
})->name('home');

Route::resource('comics', 'ComicController');

Route::get('/comics/create/error}', function () {
    return view('comic-creation-error');
})->name('creation-error');

Route::get('/comics/{comic}/success', function (Comic $comic) {
    return view('comic-creation-success', compact('comic'));
})->name('creation-success');
