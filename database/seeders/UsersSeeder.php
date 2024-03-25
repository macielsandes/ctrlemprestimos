<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //cria usuario
         User::create([
            'firstName' => 'admin',
            'lastName' => 'admin',
            'email' => "admin@localhost.com",           
            'password' => bcrypt('12345678'),
        ]);
    }
}
