<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index()
    {
        $data = new Book();

        $Book = $data->getBooks();

        return view('book', ['bookData'=> $Book]);
    }
}
