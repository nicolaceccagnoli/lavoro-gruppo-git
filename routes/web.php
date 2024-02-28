<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Guest\BookController;

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

    $title = 'Lavoro Gruppo Git';

    return view('welcome', ['title'=> $title]);
});

Route::get('/about', function () {
    return view('subpages.about');
});

Route::get('/books', [BookController::class,'index'])->name('books');
