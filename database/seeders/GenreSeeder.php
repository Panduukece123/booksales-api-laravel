<?php

namespace Database\Seeders;

use App\Models\Genre;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GenreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Genre::create([
            'name'=>'Action',
            'descriptions'=> 'Genre yang menampilkan banyak adegan pertarungan, kejar-kejaran, dan ketegangan.'
        ]);

        Genre::create([
            "name"=> "Mystery",
            "descriptions"=> "Genre yang menampilkan kisah teka-teki atau kejahatan yang perlu dipecahkan, biasanya dengan tokoh detektif atau penyelidik sebagai karakter utama."
        ]);

        Genre::create([
            "name"=>"Fiction",
            "descriptions" => "Karya sastra yang berisi cerita imajinatif dan tidak sepenuhnya berdasarkan fakta."
        ]);
    }
}
