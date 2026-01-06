<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function index()
    {
        $nome = "Nicolas";
        $habitos = ['Ler', 'Correr', 'Jogar', 'Beber Água'];
        $idade = 20;

        return view('home', [
            'nome' => $nome,
            'habitos' => $habitos,
            'idade' => $idade
        ]);
    }
}
