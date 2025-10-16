<?php

namespace Database\Seeders;

use App\Models\Book;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Book::create([
            "title" => "Harry Potter and the Philosopher's Stone",
            "author" => "J.K. Rowling",
            "genre" => "Fantasy",
            "description" => "Petualangan seorang penyihir muda bernama Harry Potter di sekolah sihir Hogwarts.",
            "image" => "https://m.media-amazon.com/images/I/81YOuOGFCJL._AC_UF1000,1000_QL80_.jpg"
        ]);
        Book::create([
            "title" => "A Game of Thrones",
            "author" => "George R.R. Martin",
            "genre" => "Fantasy",
            "description" => "Pertarungan politik dan kekuasaan di tujuh kerajaan Westeros dengan naga dan intrik keluarga bangsawan.",
            "image" => "https://m.media-amazon.com/images/I/91dSMhdIzTL._AC_UF1000,1000_QL80_.jpg"
        ]);
        Book::create([
            "title" => "The Shining",
            "author" => "Stephen King",
            "genre" => "Horror, Thriller",
            "description" => "Kisah keluarga yang terjebak di hotel terpencil saat musim dingin, di mana ayahnya perlahan menjadi gila.",
            "image" => "https://m.media-amazon.com/images/I/81IMi+0fyJL._UF1000,1000_QL80_.jpg"
        ]);
        Book::create([
            "title" => "Murder on the Orient Express",
            "author" => "Agatha Christie",
            "genre" => "Mystery",
            "description" => "Kasus pembunuhan misterius di kereta mewah yang diselidiki oleh detektif Hercule Poirot.",
            "image" => "https://m.media-amazon.com/images/I/81vpsIs58WL._AC_UF1000,1000_QL80_.jpg"
        ]);
        Book::create([
            "title" => "Norwegian Wood",
            "author" => "Haruki Murakami",
            "genre" => "Romance, Drama",
            "description" => "Kisah cinta dan kehilangan yang melankolis di Jepang tahun 1960-an.",
            "image" => "https://m.media-amazon.com/images/I/41YGoeGtEIL._SL500_.jpg"
        ]);
    }
}
