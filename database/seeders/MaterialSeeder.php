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
            'description' => 'Notebook Dell G15 de Patrimonio 15099',
            'status' => '1',
        ]);   
    
    
        Material::create([
            'name' => 'Notebook02',
            'description' => 'Notebook Latitude 3535',            
            'status' => '1',
        ]);


        Material::create([
            'name' => 'Projetor01',
            'description' => 'Projeto Epson Portatil',
          'status' => '1',    
        ]);


        Material::create([
            'name' => 'Projeto02',
            'description' => 'Projeto Epson Portatil',
           'status' => '1',

        ]);

        Material::create([
            'name' => 'Adaptador HDMI para VGA 01',
            'description' => 'Adaptador de saida de video',
            'status' => '1',
        ]);


        Material::create([
            'name' => 'Adaptador HDMI para VGA 02',
            'description' => 'Adaptador de saida de video',
            'status' => '1',
        ]);


        Material::create([
            'name' => 'Caderno01',
            'description' => 'Caderno para anotações',
           'status' => '1',
        ]);


        Material::create([
            'name' => 'Caderno02',
            'description' => 'Caderno para anotações',
            'status' => '1',
        ]);

        Material::create([
        'name' => 'Livro Código Limpo: Habilidades Práticas do Agile Software',
        'description' => 'Edição padrão, 8 setembro 2009.  
            Mesmo um código ruim pode funcionar. Mas se ele não for limpo, pode acabar com uma empresa de desenvolvimento.' ,
        'status' => '1',
        ]);


    
}
}
