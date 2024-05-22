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
            'firstName' => 'admin',
            'lastName' => 'admin',
            'email' => "admin@localhost.com",           
            'password' => bcrypt('12345678'),
        ]);
    
         User::create([
            'firstName' => 'Alice',
            'lastName' => 'Manuela',
            'email' => "alice.manuela@gmail.com",           
            'password' => bcrypt('12345678'),
        ]);
        
        User::create([
            'firstName' => 'Beatriz',
            'lastName' => 'Pietra',
            'email' => "beatriz.pietra@gmail.com",           
            'password' => bcrypt('12345678'),
        ]);

        User::create([
            'firstName' => 'Enzo',
            'lastName' => 'Vicente',
            'email' => "enzo.vicente@outlook.com",           
            'password' => bcrypt('12345678'),
        ]);

        User::create([
            'firstName' => 'Guilherme',
            'lastName' => 'Benjamin',
            'email' => "guilherme.benjamin@outlook.com",           
            'password' => bcrypt('12345678'),
        ]);
        User::create([
            'firstName' => 'Matheus',
            'lastName' => 'Rafael',
            'email' => "matheus.rafael@outlook.com",           
            'password' => bcrypt('12345678'),
        ]);
        
        User::create([
            'firstName' => 'david',
            'lastName' => 'Bruno',
            'email' => "david.bruno@outlook.com",           
            'password' => bcrypt('12345678'),
        ]);

        User::create([
            'firstName' => 'Rodrigo',
            'lastName' => 'Martins',
            'email' => "rodrigo.martins@outlook.com",           
            'password' => bcrypt('12345678'),
        ]);

        User::create([
            'firstName' => 'Amanda',
            'lastName' => 'Diana',
            'email' => "amanda.diana@uol.com.br",           
            'password' => bcrypt('12345678'),
        ]);
    }
}
