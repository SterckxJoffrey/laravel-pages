<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function acceuil() {
        return view('Home');
    }

    public function aPropos() {
        return view('About');
    }
}
