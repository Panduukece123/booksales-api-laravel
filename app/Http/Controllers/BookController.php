<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

use function PHPUnit\Framework\isEmpty;

class BookController extends Controller
{
    public function index()
    {
        $books = Book::all();

        if ($books -> isEmpty()) {
            return response()->json([
                'succes' => true,
                "message" => 'Data is empty'

            ], 200);
        }

        return response()->json([
            'succes' => true,
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
                'succes' => false,
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
            'succes'=> true,
            'message'=> 'resource added successfully',
            'data'=> $book
        ]);

    }
}
