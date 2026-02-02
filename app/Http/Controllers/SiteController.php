<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function index()
    {
        
        return view('home');
    }

    public function dashboard()
    {

        $habits = auth()->user()->habit;

        return view('dashboard', compact('habits'));
    }
}
