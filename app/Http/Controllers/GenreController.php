<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Genre;
use Illuminate\Support\Facades\Validator;

use function PHPUnit\Framework\isEmpty;

class GenreController extends Controller
{
    public function index()
    {
        $genres = Genre::all();

        if($genres->isEmpty()){
            return response()->json([
                'succes'=> true,
                "message"=>'Data is empty'

            ], 200);
        }
        
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

    public function store(Request $request)
    {
        $validatorGenre = Validator::make($request->all(), [
            'name' => 'required|string|max:100',
            'description' => 'required|string',
        ]);
        //2. check valid

        if ($validatorGenre->fails()) {
            return response()->json([
                'succes' => false,
                'message' => $validatorGenre->errors()
            ], 422);
        }

        //3. insert
       $genre =  Genre::create([
            'name'=> $request ->name,
            'description'=> $request ->description,
        ]);

        //4. response
        return response()-> json([
            'succes'=> true,
            'message'=> 'resource added successfully',
            'data'=> $genre
        ]);
    }

    
}
