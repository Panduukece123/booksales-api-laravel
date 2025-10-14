<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Genre extends Model
{
    private $Genres = [
        [
            "nama"=> "Romance",
            "description" => "Genre yang berfokus pada cinta dan kasih sayang."
        ],
        [
            "nama"=>"Fiction",
            "description" => "Karya sastra yang berisi cerita imajinatif dan tidak sepenuhnya berdasarkan fakta."
        ],
        [
            "nama"=>"Action",
            "description" => "Genre yang menampilkan banyak adegan pertarungan, kejar-kejaran, dan ketegangan."
        ],
        [
            "nama"=>"Science Fiction",
            "description" => "Genre yang berfokus pada imajinasi ilmiah, teknologi masa depan, dan eksplorasi ruang atau waktu."
        ],
        [
            "nama"=> "Mystery",
            "description"=> "Genre yang menampilkan kisah teka-teki atau kejahatan yang perlu dipecahkan, biasanya dengan tokoh detektif atau penyelidik sebagai karakter utama."

        ]
    ];

    public function getGenreData(){
        return $this -> Genres;
    }
    
}
