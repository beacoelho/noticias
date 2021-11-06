<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NoticiaCategoria extends Model
{
    use HasFactory;

    protected $table = 'noticias_categorias';
    // return $this->belongsToMany(Categoria::class, 'noticias_categorias');
    // return $this->belongsToMany(Noticia_Categoria::class, 'noticias_categorias');


}
