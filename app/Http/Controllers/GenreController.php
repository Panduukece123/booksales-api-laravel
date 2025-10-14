<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Genre;

class GenreController extends Controller
{
    public function index()
    {
        $data = new Genre();
        $Genre = $data->getGenreData();

        return view('genre', ['genreData'=> $Genre]);
    }
}
