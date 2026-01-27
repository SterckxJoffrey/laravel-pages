@extends('app')

@section('content')
<div class="container py-5">
    <div class="row align-items-start">
        

        <div class="col-md-6 mb-4">
            <h1 class="mb-3">Accueil</h1>
            <p>
                Voici la page d’accueil de mon site. Mon site est composé d’une page d’accueil ainsi
                que d’une page à propos qui me décrit. Ce projet est amené à évoluer et pourrait
                devenir mon futur portfolio.
            </p>
            <p>
                N’hésitez pas à revenir voir ce projet lorsqu’il aura grandi.
                Je vous laisse découvrir le reste de mon site à votre aise.
            </p>
        </div>


        <div class="col-md-6">
            <div class="card shadow-sm">
                <div class="card-body">

            <form action="/register" method="POST" id="registration-form">
                @csrf
            <div class="form-group">
              <label for="username-register" class="text-muted mb-1"><small>Username</small></label>
              <input name="username" id="username-register" class="form-control" type="text" placeholder="Pick a username" autocomplete="off" />
            </div>
 
            <div class="form-group">
              <label for="email-register" class="text-muted mb-1"><small>Email</small></label>
              <input name="email" id="email-register" class="form-control" type="text" placeholder="you@example.com" autocomplete="off" />
            </div>
 
            <div class="form-group">
              <label for="password-register" class="text-muted mb-1"><small>Password</small></label>
              <input name="password" id="password-register" class="form-control" type="password" placeholder="Create a password" />
            </div>
 
            <div class="form-group">
              <label for="password-register-confirm" class="text-muted mb-1"><small>Confirm Password</small></label>
              <input name="password" id="password-register-confirm" class="form-control" type="password" placeholder="Confirm password" />
            </div>
 
            <button type="submit" class="py-3 mt-4 btn btn-lg btn-success btn-block">Sign up for OurApp</button>
          </form>

                </div>
            </div>
        </div>

    </div>
</div>
@endsection
