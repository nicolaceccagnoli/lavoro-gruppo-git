<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Books;

class BookController extends Controller
{
    //
    public function index() {

        // $books = Books::all();

        return view('books.book');
    }
}
