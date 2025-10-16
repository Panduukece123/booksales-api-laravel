<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Genre;

class GenreController extends Controller
{
    public function index()
    {
        $genres = Genre::all();

        return view('genre',['genres'=>$genres]);



        //  dummy : 
        // $data = new Genre();
        // $Genre = $data->getGenreData();

        // return view('genre', ['genreData'=> $Genre]);
    }
}
