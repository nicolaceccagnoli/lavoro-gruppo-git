<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

//Models
use App\Models\Movie;

class MovieController extends Controller
{
    public function index()
    {
        $trains = Movie::all(); 
        return view('movies.index', compact('movies'));
    }
}
