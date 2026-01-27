<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;
use Illuminate\Support\Facades\Auth;


class ArticleController extends Controller
{

    public function create()
    {
        return view('articles.create'); 
    }


public function store(Request $request)
{
    if (!Auth::check()) {
        return redirect('/')->with('failure', 'Vous devez être connecté pour créer un article.');
    }

    $validated = $request->validate([
        'title' => 'required|string|max:255',
        'content' => 'required|string',
    ]);

    $article = new Article();
    $article->title = $validated['title'];
    $article->content = $validated['content'];
    $article->user_id = Auth::id();

    $article->save();

    return redirect('/dashboard')->with('success', 'Article créé avec succès !');
}

}

