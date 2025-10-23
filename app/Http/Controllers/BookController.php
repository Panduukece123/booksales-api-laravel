<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

use function PHPUnit\Framework\isEmpty;

class BookController extends Controller
{
    public function index()
    {
        $books = Book::with('genre', 'author')->get();

        if ($books -> isEmpty()) {
            return response()->json([
                'success' => true,
                "message" => 'Data is empty'

            ], 200);
        }

        return response()->json([
            'success' => true,
            'messsage' => 'Get All Books',
            'data' => $books
        ], 200);

        // return view('book', ['books'=> $books]);
        // $data = new Book();

        // $Book = $data->getBooks();

    }

    public function store(Request $request)
    {
        // 1. Validator 

        $validatorBooks = Validator::make($request->all(), [
            'title' => 'required|string|max:100',
            'description' => 'required|string',
            'price' => 'required|integer',
            'stock' => 'required|integer',
            'cover_photo' => 'required|image|mimes:jpeg,jpg,png|max:2048',
            'genre_id' => 'required|exists:genres,id',  // Changed exist to exists
            'author_id' => 'required|exists:authors,id' // Changed exist to exists
        ]);
        //2. check valid

        if ($validatorBooks->fails()) {
            return response()->json([
                'success' => false,
                'message' => $validatorBooks->errors()
            ], 422);
        }

        //3. Upload
        $image = $request -> file('cover_photo');
        $image -> store('books', 'public');

        //4. insert
       $book =  Book::create([
            'title'=> $request ->title,
            'description'=> $request ->description,
            'price'=> $request ->price,
            'stock'=> $request ->stock,
            'cover_photo'=> $image ->hashName(),
            'genre_id'=> $request ->genre_id,
            'author_id'=> $request ->author_id,
        ]);

        //5. response
        return response()-> json([
            'success'=> true,
            'message'=> 'resource added successsfully',
            'data'=> $book
        ]);

    }

    public function show(string $id){
        $book = Book::find($id);

        if(!$book){
            return response()->json([
                'success'=> false,
                'message'=> 'resource not found',

            ],404);
        }

        return response()->json([
            'success'=>true,
            'message'=> 'get book detail',
            'data'=> $book
        ],200);
    }


    public function update(string $id, Request $request){

        //1 mencari data

        $book = Book::find($id);

        if(!$book){
            return response()->json([
                'success'=> false,
                'message'=> 'resource not found',

            ],404);
        }


        //2 validator

         $validatorBooks = Validator::make($request->all(), [
            'title' => 'required|string|max:100',
            'description' => 'required|string',
            'price' => 'required|integer',
            'stock' => 'required|integer',
            'cover_photo' => 'nullable|image|mimes:jpeg,jpg,png|max:2048',
            'genre_id' => 'required|exists:genres,id',  
            'author_id' => 'required|exists:authors,id' 
        ]);

        if($validatorBooks -> fails()){
            return response()->json([
                'success' => false,
                'message' => $validatorBooks->errors()
            ], 422);
            
        }

        //3 Siapakan data yang ingin diupdate

        $data = [
            'title'=>$request->title,
            'description'=>$request->description,
            'price'=>$request->price,
            'stock'=>$request->stock,
            'genre_id'=>$request->genre_id,
            'author_id'=>$request->author_id
        ];

        //4 replace image

        if($request->hasFile('cover_photo')){

            $image = $request->file('cover_photo');
            $image ->store('books', 'public');


            if($book->cover_photo){
                Storage::disk('public')->delete('books/'.$book->cover_photo);
            }

            $data['cover_photo'] = $image->hashName();

        }


        //5 update data baru ke database
        $book->update($data);

        return response()->json([
            'success'=>true,
            'message'=> 'get book detail',
            'data'=> $book
        ],200);



    }

    public function destroy(string $id){
        $book = Book::find($id);

        if(!$book){
            return response()->json([
                'success'=> false,
                'message'=> 'resource not found',
            ],404);
        }
        
        if($book->cover_photo){
            //delete from storage
            Storage::disk('public')->delete('books/' .$book->cover_photo);
        }
        
        $book->delete();

        return response()->json([
            'success'=>true,
            'message'=> 'Delete Response successfully',
        ],200);

    }


}
