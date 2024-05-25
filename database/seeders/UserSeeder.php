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
    //Cria usuarios no banco de dados
    public function run(): void
    {             
        User::create([
            'firstname' => 'admin',
            'lastname' => '1 ',
            'email' => "admin@localhost.com",           
            'password' => bcrypt('12345678'),
        ]);
    
         User::create([
            'firstName' => 'Atendente',
            'lastName' => '1',
            'email' => "atendente@gmail.com",           
            'password' => bcrypt('12345678'),
        ]);        
    
    }
}
