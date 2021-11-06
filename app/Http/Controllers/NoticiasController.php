<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Noticias;
use Carbon\Carbon;
use App\Http\Requests\NoticiaRequest;
use App\Services\UploadService;


class NoticiasController extends Controller
{
    public function login()
    {
        return view('noticias.login');
    }

    public function index()
    {
        $noticias = Noticias::all();
        return view('noticias.index' , [
            "noticias" => $noticias
        ]);
    }
    public function show()
    {
        $noticias = Noticias::where('status', Noticias::STATUS_ATIVO)->paginate(5);
        return view('noticias.listar' , [
            "noticias" => $noticias
        ]);
    }
    /* Retorna a view de criação */
    public function form()
    {
        return view('noticias.form');
    }

    public function store(NoticiaRequest $request)
    {
        $dados = $request->all();

        $dados['imagem'] = UploadService::upload($request);
        Noticias::create($dados);

        return redirect()->back()->with(['mensagem'=> 'Registro salvo com sucesso!']);
    }

    public function edit(Noticias $noticia)
    {
        //$noticia = Noticias::findOrFail($noticia);      
        return view('noticias.form', [
            'noticia' => $noticia
    ]);
    }

    public function update(Noticias $noticia, Request $request)
    {
        //$noticia = Noticias::findOrFail($noticia);
        $dados = $request->all();
        if ($request->imagem) 
        {
            $dados['imagem'] = UploadService::upload($request);
        }
        $noticia->update($dados);
        return redirect()->back()->with('mensagem', 'Registro atualizado com sucesso!');
    }

    public function destroy(Noticias $noticia)
    {
        //$noticia = Noticias::findOrFail($noticia);
        $noticia->delete();
        return redirect('/noticias/listar')->with('mensagem', 'Registro excluído com sucesso!');
    }
}