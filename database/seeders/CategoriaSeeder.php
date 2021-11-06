<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Categoria;
class CategoriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Categoria::create([
            "titulo" => "Politica",  
        ]); 
        Categoria::create([
            "titulo" => "Saúde",  
        ]);
        Categoria::create([
            "titulo" => "Educação",  
        ]);
        Categoria::create([
            "titulo" => "Esporte",  
        ]);
        Categoria::create([
            "titulo" => "Eleições",  
        ]);  

    }
}
