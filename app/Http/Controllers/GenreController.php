<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Genre;

class GenreController extends Controller
{
    public function index()
    {
        $genres = Genre::all();
        
         return response()->json([
            'succes'=>true,
            "message"=>"Get all Data Genre",
            'data'=> $genres
        ],200);

        // return view('genre',['genres'=>$genres]);
        //  dummy : 
        // $data = new Genre();
        // $Genre = $data->getGenreData();

       
    }
}
