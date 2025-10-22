<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name'=> 'Admin',
            'email'=> 'admin123@gmail.com',
            'password'=> bcrypt('admin123'),
            'role'=> 'admin'
        ]);

        User::create([
            'name'=> 'Pandu',
            'email'=> 'pandu123@gmail.com',
            'password' => bcrypt('pandu123'),
            'role'=> 'customer'
        ]);
    }
}
