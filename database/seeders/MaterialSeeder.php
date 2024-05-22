<?php

namespace Database\Seeders;

use App\Models\Material;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MaterialSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Material::create([
            'name' => 'Notebook01 ',
            'description' => 'Notebook Dell G15',
        ]);

        Material::create([
            'name' => 'Notebook02',
            'description' => 'Notebook Latitude 3535',
        ]);


        Material::create([
            'name' => 'Projetor01',
            'description' => 'Projeto Epson Portatil',
        ]);


        Material::create([
            'name' => 'Projeto02',
            'description' => 'Projeto Epson Portatil',
        ]);

        Material::create([
            'name' => 'Adaptador HDMI para VGA 01',
            'description' => 'Adaptador de saida de video',
        ]);


        Material::create([
            'name' => 'Adaptador HDMI para VGA 02',
            'description' => 'Adaptador de saida de video',
        ]);


        Material::create([
            'name' => 'Caderno01',
            'description' => 'Caderno para anotações',
        ]);


        Material::create([
            'name' => 'Caderno02',
            'description' => 'Caderno para anotações',
        ]);
    }
}
