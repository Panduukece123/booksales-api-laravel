<?php

namespace App\Http\Controllers;

use App\Models\Author;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

use function PHPUnit\Framework\isEmpty;

class AuthorController extends Controller
{
    public function index(){

        $authors = Author::all();

        if($authors->isEmpty()){
            return response()->json([
                'succes'=> true,
                "message"=>'Data is empty'

            ], 200);
        }

        return response()->json([
            'succes'=> true,
            'message'=> 'Get All Author',
            'data'=> $authors

        ],200);


        
        // return view('author', ['authors'=> $authors]);
        
        // data dummy
        // $data = new Author();
        
        // $authors = $data->getAuthors();
        
        
    }
    public function store(Request $request){
        //Validator 

        $validatorAuthor = Validator::make($request->all(),[
            'name'=> 'required|string|max:100',
            'photo'=>'required|image|mimes:jpeg,jpg,png|max:2048',
            'bio'=> 'required|string|max:250'
        ]);

        //2.  Check Valid

        if($validatorAuthor->fails()){
            return response()->json([
                'succes'=>false,
                'message'=> $validatorAuthor->errors()
            ],422);
        }

        // 3.Upload

        $photo = $request -> file('photo');
        $photo -> store('authors', 'public');

        //4. insert
       $author =  Author::create([
            'name'=> $request ->name,
            'photo'=> $photo ->hashName(),
            'bio'=> $request ->bio
        ]);

        //5. response
        return response()-> json([
            'succes'=> true,
            'message'=> 'resource added successfully',
            'data'=> $author
        ]);

    }
}
