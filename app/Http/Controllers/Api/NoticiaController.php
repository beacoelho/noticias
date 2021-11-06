<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Noticias;
use Illuminate\Http\Request;

class NoticiaController extends Controller
{
    public function index()
    {
        return Noticias::all();
    }

    public function store(Request $request)
    {
        return Noticias::create($request->all());
    }

    public function update(Request $request, Noticias $noticia) 
    {
        $noticia->update($request->all());
        return $noticia;
    }

    public function destroy(Noticias $noticia)
    {
        return $noticia->delete();
    }

    public function show(Noticias $noticia)
    {
        return $noticia;
    }
}
