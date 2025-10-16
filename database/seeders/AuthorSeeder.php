<?php

namespace Database\Seeders;

use App\Models\Author;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AuthorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Author::create([
            "name" => "J.K. Rowling",
            "photo" => "https://stories.jkrowling.com/wp-content/uploads/2021/09/Shot-B-105_V2_CROP-e1630873059779.jpg",
            "bio" => "Penulis asal Inggris yang terkenal dengan seri Harry Potter.",
        ]);
        Author::create([
           "name" => "Stephen King",
           "photo" => "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQXwgxDkeX2icgClkwXB0ZCvs0EWfKCyzGJ8w&s", 
           "bio" => "Penulis asal Amerika Serikat yang dikenal dengan karya bergenre horor, fantasi, dan thriller seperti It dan The Shining.",
        ]);
        Author::create([
            "name" => "Agatha Christie",
            "photo" => "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTo0kOHOzWzH7Q6HoKtLfbpsqX-spJ-mJazSg&s",
            "bio" => "Penulis misteri legendaris asal Inggris, terkenal dengan karakter detektif Hercule Poirot dan Miss Marple.",
        ]);
        Author::create([
            "name" => "Haruki Murakami",
            "photo" => "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRVDrUoTlC5cOJW20XSEo7xrUDVXLxXmbi_-A&s",
            "bio" => "Penulis asal Jepang dengan gaya surreal dan tema eksistensial, terkenal lewat novel Norwegian Wood dan Kafka on the Shore.",
        ]);
        Author::create([
            "name" => "George R.R. Martin",
            "photo" => "https://media.vanityfair.com/photos/532359fe12f9ed9c3400019e/16:9/w_1280,c_limit/george-rr-martin-tout.jpg",
            "bio" => "Penulis asal Amerika Serikat yang dikenal dengan seri novel A Song of Ice and Fire, adaptasi dari Game of Thrones.",
        ]);

    }
}
