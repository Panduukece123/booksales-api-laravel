<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index()
    {
        $books = Book::all();

         return response()->json([
            'succes'=>true,
            'messsage'=>'Get All Books',
            'data'=>$books
        ],200);

        // return view('book', ['books'=> $books]);
        // $data = new Book();

        // $Book = $data->getBooks();

       

    }
}
