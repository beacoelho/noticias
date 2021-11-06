<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Noticias extends Model
{
    const STATUS_ATIVO = "A";
    use HasFactory;
    protected $table = 'noticias';
    protected $guarded = ['id','create_at','update_at'];
    protected $dates = ['data_publicacao', 'create_at','update_at']; /* Nessa linha é modificado*/

    public function getStatusFormatadoAttribute() /* É preciso colocar o Attribute sempre */
    { 
            if($this->status == "A")
            {
                return   "Ativo";
            }
                return  "Inativo";
    }

    public function setDataPublicacaoAttribute($valor)
    {
        $this->attributes['data_publicacao'] = Carbon::createFromFormat("d/m/Y", $valor)->format("Y-m-d");
    }
    public function comentarios()
    {
        return $this->hasMany(Comentario::class, 'noticia_id'); // esse segundo parametro "noticia_id" é quando nao ta no mesmo padrao(banco de dados)
    }

    public function categorias()
    {
        return $this->belongsToMany(Categoria::class, 'noticias_categorias', 'noticia_id');
    }
}