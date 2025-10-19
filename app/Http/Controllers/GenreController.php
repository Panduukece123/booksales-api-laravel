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

    public function show(string $id){

        $genre = Genre::find($id);

        if(!$genre){
            return response()->json([
                'succes'=> false,
                'message'=> 'data not found'

            ],404);
        }

        return response()->json([
            'succes'=> true,
            'message'=> 'genre by Id has been successfully load',
            'data'=> $genre
        ],200);

    }

    public function update(string $id, Request $request){
        //1 mencari data
        $genre = Genre::find($id);

        if(!$genre){
            return response()->json([
                'succes'=>false,
                'message'=> 'resource not found'
            ],404);
        }

        //2 validator
        $validatorGenre = Validator::make($request->all(),[
            'name' => 'required|string|max:100',
            'description' => 'required|string',
        ]);

        //3 Siapkan data yg ingin diupdate

        $data = [
            'name'=>$request->name,
            'description'=>$request->description
        ];

        //4 Update data baru ke database

        $genre->update($data);

        return response()->json([
            'success'=>true,
            'message'=> 'Data has been succesfully updated',
            'data'=> $genre
        ],200);

    }

    public function destroy(string $id){
        $genre = Genre::find($id);

        if(!$genre){
            return response()->json([
                'succes'=>false,
                'message'=> 'data not found'

            ],404);
        }

        
        return response()->json([
            'succes' => true,
            'message'=> 'genre has been successfully deleted'
        ],200);
        
        $genre -> delete();
    }

    
}
