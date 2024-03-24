<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Models\Movie;
use Illuminate\Http\Request;

class PageController extends Controller
{
    //metodo per mostrare la movie list
    public function index()
    {
        $movies = Movie::orderBy("id", "desc")->paginate(10);
        return view("home", compact("movies"));
    }
}
