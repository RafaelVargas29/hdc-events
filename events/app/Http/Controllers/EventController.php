<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EventController extends Controller
{
    public function index(){
        $nome = "Rafael";
        $idade = '22';
        $profissao = "progrador";
        $arr =  [1,2,3,4,5];
        $nomes = ["Mateus", "Maria", "João", "Saulo"];

        return view('welcome', 
            [
                'nome' => $nome,
                'idade' => $idade,
                'profissao' => $profissao,
                'arr' => $arr,
                'nomes' => $nomes
            ],
        );
    }

    public function create(){
        return view('/events/create');
    }
}