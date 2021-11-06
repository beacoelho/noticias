<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NoticiasController; /* DESSA FORMA EVITA USAR TODA A ROTA DENTRO 
DA ROUTE PASSANDO SOMENTE O NOME DO ARQUIVO */

use App\Http\Controllers\UsuariosController; /* DESSA FORMA EVITA USAR TODA A ROTA DENTRO 
DA ROUTE PASSANDO SOMENTE O NOME DO ARQUIVO */

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/', function () {
    return redirect('/home');
});

Route::middleware('auth')->group(function() {
    Route::resource('noticias', NoticiasController::class);
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::get('/noticias/form', [NoticiasController::class, 'form']);
    Route::get('/teste', function() {});
});

