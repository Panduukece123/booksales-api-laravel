<?php

namespace App\Http\Controllers;

use App\Models\Author;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
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

    public function show(string $id){

        $author = Author::find($id);

        if(!$author){
            return response()->json([
                'succes'=> false,
                'message'=> 'Resource not found'

            ],404);
        }

        return response()->json([
            'succes'=> true,
            'message'=> 'Author By Id has been successfull',
            'data'=> $author

        ],200);
    }

    public function update(string $id, Request $request){

        //1 mencari data

        $author = Author::find($id);

        if(!$author){
            return response()->json([
                'success'=>false,
                'message'=> 'data not found'
            ],404);
        }


        

        //2 validator
        $validatorAuthor = Validator::make($request->all(),[
            'name'=> 'required|string|max:100',
            'photo'=>'nullable|image|mimes:jpeg,jpg,png|max:2048',
            'bio'=> 'required|string|max:250'

        ]);

        if($validatorAuthor->fails()){
            return response()->json([
                'success'=> false,
                'message'=> $validatorAuthor->errors()
            ],422);
        }

        //3 siapkan data yg ingin diupdate
        $data = [
            'name'=>$request->name,
            'bio'=> $request->bio
        ];

        //4 replace image

        if($request->hasFile('photo')){
            $image = $request->file('photo');
            $image->store('authors','public');

            if($author->photo){
                Storage::disk('public')->delete('authors/'.$author->photo);
            }
        }

        //5 update data baru ke database
        $author->update($data);

        return response()->json([
            'success'=>true,
            'message'=>'Update Has been Successfully',
            'data'=> $author
        ],200);
    }

    public function destroy(string $id){
        $author = Author::find($id);

        if(!$author){
            return response()->json([
                'succes'=>false,
                'message'=> 'resource no found'
            ],404);
        }

        if($author->bio){
            Storage::disk('public')->delete('authors/' .$author->bio);
        }

        $author->delete();

        return response()->json([
            'succes'=> true,
            'message'=> 'Author was succesfully deleted'
        ],200);
    }
}
