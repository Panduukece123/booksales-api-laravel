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
            "description" => "Petualangan seorang penyihir muda bernama Harry Potter di sekolah sihir Hogwarts.",
            "price" => 150000,
            "stock" => 5,
            "cover_photo" => "https://m.media-amazon.com/images/I/81YOuOGFCJL._AC_UF1000,1000_QL80_.jpg",
            "author_id" => 1,
            "genre_id" => 4,
        ]);
        Book::create([
            "title" => "A Game of Thrones",
            "description" => "Pertarungan politik dan kekuasaan di tujuh kerajaan Westeros dengan naga dan intrik keluarga bangsawan.",
            "cover_photo" => "https://m.media-amazon.com/images/I/91dSMhdIzTL._AC_UF1000,1000_QL80_.jpg",
            "price" => 200000,
            "stock" => 3,
            "author_id" => 5,
            "genre_id" => 4,
        ]);
        Book::create([
            "title" => "The Shining",
            "description" => "Kisah keluarga yang terjebak di hotel terpencil saat musim dingin, di mana ayahnya perlahan menjadi gila.",
            "cover_photo" => "https://m.media-amazon.com/images/I/81IMi+0fyJL._UF1000,1000_QL80_.jpg",
            "price" => 120000,
            "stock" => 4,
            "genre_id" => 5,
            "author_id" => 2,
        ]);
        Book::create([
            "title" => "Murder on the Orient Express",
            "description" => "Kasus pembunuhan misterius di kereta mewah yang diselidiki oleh detektif Hercule Poirot.",
            "cover_photo" => "https://m.media-amazon.com/images/I/81vpsIs58WL._AC_UF1000,1000_QL80_.jpg",
            "price" => 100000,
            "stock" => 2,
            "genre_id" => 2,
            "author_id" => 3,
        ]);
        Book::create([
            "title" => "Norwegian Wood",
            "description" => "Kisah cinta dan kehilangan yang melankolis di Jepang tahun 1960-an.",
            "cover_photo" => "https://m.media-amazon.com/images/I/41YGoeGtEIL._SL500_.jpg",
            "price" => 90000,
            "stock" => 4,
            "genre_id" => 3,
            "author_id" => 4,
        ]);
    }
}
