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
            'description'=> 'Genre yang menampilkan banyak adegan pertarungan, kejar-kejaran, dan ketegangan.'
        ]);

        Genre::create([
            "name"=> "Mystery",
            "description"=> "Genre yang menampilkan kisah teka-teki atau kejahatan yang perlu dipecahkan, biasanya dengan tokoh detektif atau penyelidik sebagai karakter utama."
        ]);

        Genre::create([
            "name"=>"Fiction",
            "description" => "Karya sastra yang berisi cerita imajinatif dan tidak sepenuhnya berdasarkan fakta."
        ]);

        Genre::create([
            "name"=>"Fantasy",
            "description" => "Genre yang menampilkan elemen-elemen magis, makhluk mitos, dan dunia imajinatif yang berbeda dari dunia nyata."

        ]);
        Genre::create([
            "name"=>"Horror",
            "description" => "Genre yang dirancang untuk menimbulkan rasa takut, cemas, atau ketegangan pada pembaca atau penonton."
        ]);
        


    }
}
