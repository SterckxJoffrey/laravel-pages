<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function accueil() {
        return view('home', [
            'title' => 'Accueil']);
    }

    public function aPropos() {
        return view('about');
    }
}
