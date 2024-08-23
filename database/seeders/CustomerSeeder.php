<?php

namespace Database\Seeders;


use App\Models\Customer;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Customer::create([
            'firstname' => 'Alice',
            'lastname' => 'Manuela',
            'username' => 'alice.manuela',
            'email' => 'alice.manuela@gmail.com',
            'status' => "1",
        ]);

        Customer::create([
            'firstname' => 'Beatriz',
            'lastname' => 'Pietra',
            'username' => 'beatriz.pietra',
            'email' => 'beatriz.pietra@gmail.com',
            'status' => "1",
        ]);

        Customer::create([
            'firstname' => 'Enzo',
            'lastname' => 'Vicente',
            'username' => 'enzo.vicente',
            'email' => 'enzo.vicente@outlook.com',
            'status' => "1",
        ]);

        Customer::create([
            'firstname' => 'Guilherme',
            'lastname' => 'Benjamin',
            'username' => 'guilherme.benjamin',
            'email' => 'guilherme.benjamin@outlook.com',
            'status' => "1",
        ]);

        Customer::create([
            'firstname' => 'Matheus ',
            'lastname' => 'Rafael',
            'username' => 'matheus.rafael',
            'email' => 'matheus.rafael@outlook.com',
            'status' => "1",
        ]);

        Customer::create([
            'firstname' => 'David',
            'lastname' => 'Bruno',
            'username' => 'david.bruno',
            'email' => 'david.bruno@outlook.com',
            'status' => "1",
        ]);

        Customer::create([
            'firstname' => 'Rodrigo',
            'lastname' => 'Martins',
            'username' => 'rodrigo.martins',
            'email' => 'rodrigo.martins@outlook.com',
            'status' => "1",
        ]);
    }
}
