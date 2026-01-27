@extends('app') 

@section('content')
<div class="container mt-4">
    <h1>Bienvenue, {{ auth()->user()->username }} !</h1>
    <p>Vous êtes connecté et pouvez maintenant créer des articles ou accéder à votre contenu.</p>

    <a href="/articles/create" class="btn btn-primary mt-3">Créer un article</a>
</div>
@endsection
