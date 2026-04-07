<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contato;

class contatoController extends Controller
{
    public function index(){
        $contatos = [
            (object)["nome"=>"Maria", "tel"=>"12345678"],
            (object)["nome"=>"Pedro", "tel"=>"23456789"]
        ];

        $contato = new Contato();
        dd($contato->lista());
        // $cont = $contato->lista(); // Lógica para listar só o nome
        // dd($cont->nome);

        return view('contato.index', compact('contatos'));
    }

    public function criar(Request $req){
        dd ($req['nome']); // traz o nome do formulário
        return "Esse é o criar do contatoControler";
    }

    public function editar(Request $req2){
        dd ($req2->all()); // traz todas as informações
        return "Esse é o editar do contatoControler";
    }
}
