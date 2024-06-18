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
            'firstname' => 'administrador',
            'lastname' => '',
            'username' => 'admin',
            'email' => "admin@localhost.com",           
            'password' => bcrypt('12345678'),
        ]);
    
         User::create([
            'firstName' => 'Atendente',
            'lastName' => '',
            'username'=> 'atendente1',
            'email' => "atendente1@gmail.com",           
            'password' => bcrypt('12345678'),
        ]);     
        
        User::create([
            'firstName' => 'Atendente2',
            'lastName' => '',
            'username'=> 'atendente2',
            'email' => "atendente2@gmail.com",           
            'password' => bcrypt('12345678'),
        ]);        
    
    }
}
