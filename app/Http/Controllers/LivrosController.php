<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Livro;

class LivrosController extends Controller
{
    public function create(){
        return view('livros.cadastrar');
    }

    public function store(Request $request){
        Livro::create([
            'titulo' => $request->titulo,
            'autor' => $request->autor,
            'isbn' => $request->isbn,
            'preco' => $request->preco,
            'editora' => $request->editora,
            'ano' => $request->ano, 
        ]);
        return view('livros.cadastrar');
    }

    public function show(){
        $livros = Livro::all();
        return view('livros.index',['livros' => $livros]);
    }

    public function destroy($id){
        $livro=Livro::findOrFail($id);
        $livro->delete();
        $livros = Livro::all();
        return view('livros.index',['livros' => $livros]);
    }

    public function edit($id){
        $livro = Livro::findOrFail($id);
        return view('livros.editar', ['livro' => $livro]);
    }

    public function update(Request $request, $id){
        $livro = Livro::findOrFail($id);
        $livro->update([
            'titulo' => $request->titulo,
            'autor' => $request->autor,
            'isbn' => $request->isbn,
            'preco' => $request->preco,
            'editora' => $request->editora,
            'ano' => $request->ano,
        ]);
        $livros = Livro::all();
        return view('livros.index',['livros' => $livros]);   
    }

    public function listar(){
        $livros = Livro::all();
        return view('livros.listar',['livros' => $livros]);
    }
}
