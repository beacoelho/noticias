<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Comentario;

class ComentarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Comentario::create([
            "conteudo" => "TUDO MENTIRA, NAO HOUVE SUPERFATURAMENTO",
            "noticia_id" => 1
        ]);
        Comentario::create([
            "conteudo" => "DESGOVERNO",
            "noticia_id" => 1
        ]);
    }
}

