    <!DOCTYPE html>
    <html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Laravel Pages </title>
        <link 
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" 
            rel="stylesheet" 
            integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" 
            crossorigin="anonymous">
    </head>
    <body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
        <a class="navbar-brand" href="/">Navbar</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">

        {{-- Affichage messages --}}
        @if(session('success'))
            <div class="alert alert-success ms-2">{{ session('success') }}</div>
        @endif
        @if(session('failure'))
            <div class="alert alert-danger ms-2">{{ session('failure') }}</div>
        @endif

        {{-- Formulaire login ou bouton logout --}}
        @auth
            <span class="me-2">Bonjour, {{ auth()->user()->username }}</span>
            <form method="POST" action="/logout">
                @csrf
                <button type="submit" class="btn btn-secondary btn-sm">Déconnexion</button>
            </form>
        @else
            <form method="POST" action="/login" class="d-flex gap-2 ms-auto">
                @csrf
                <input type="text" name="loginusername" class="form-control" placeholder="Nom d'utilisateur" required>
                <input type="password" name="loginpassword" class="form-control" placeholder="Mot de passe" required>
                <button type="submit" class="btn btn-primary">Se connecter</button>
            </form>
        @endauth

        </div>
    </div>
    </nav>


        <div class="container mt-4">
            @yield('content')
        </div>

    </body>
    </html>
