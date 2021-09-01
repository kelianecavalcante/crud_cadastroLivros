<?php

use App\Http\Controllers\LivrosController;
use Illuminate\Support\Facades\Route;

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

Route::get('/livro/novo', 'LivrosController@create');
Route::post('/livro/novo', 'LivrosController@store')->name('salvar_livro');
Route::get('/livros/todos','LivrosController@show')->name('index_livro');
Route::get('/livro/apagar/{id}','LivrosController@destroy')->name('apagar_livro');
Route::get('/livro/editar/{id}','LivrosController@edit')->name('editar_livro');
Route::post('/livro/atualizar/{id}','LivrosController@update')->name('atualizar_livro');
Route::get('/livros/listar','LivrosController@listar')->name('listar_livro');
