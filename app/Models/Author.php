<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    private $authors = [
        [
            "name" => "J.K. Rowling",
            "bio" => "Penulis asal Inggris yang terkenal dengan seri Harry Potter.",
            "age" => 35,
            "flag" => "Inggris"
        ],
        [
            "name" => "George R.R. Martin",
            "bio" => "Penulis asal Amerika Serikat yang dikenal dengan seri novel A Song of Ice and Fire, adaptasi dari Game of Thrones.",
            "age" => 42,
            "flag" => "Amerika Serikat"
        ],
        [
            "name" => "Haruki Murakami",
            "bio" => "Penulis asal Jepang dengan gaya surreal dan tema eksistensial, terkenal lewat novel Norwegian Wood dan Kafka on the Shore.",
            "age" => 40,
            "flag" => "Jepang"
        ],
        [
            "name" => "Agatha Christie",
            "bio" => "Penulis misteri legendaris asal Inggris, terkenal dengan karakter detektif Hercule Poirot dan Miss Marple.",
            "age" => 39,
            "flag" => "Inggris"
        ],
        [
            "name" => "Stephen King",
            "bio" => "Penulis asal Amerika Serikat yang dikenal dengan karya bergenre horor, fantasi, dan thriller seperti It dan The Shining.",
            "age" => 38,
            "flag" => "Amerika Serikat"
        ]
    ];


    public function getAuthors()
    {
        return $this->authors;
    }
}
