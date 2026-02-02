<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function index()
    {
        $name = 'Nicolas';
        $habits = ['Correr', 'Ler', 'Jogar'];
        return view('home', compact('name', 'habits') );
    }

    public function dashboard()
    {
        return view('dashboard');
    }
}
