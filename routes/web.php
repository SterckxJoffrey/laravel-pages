<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ArticleController;


Route::get('/', [PageController::class, 'accueil']);
Route::get('/a-propos', [PageController::class, 'aPropos']);


Route::get('/register', [UserController::class, 'showRegisterForm']);
Route::post('/register', [UserController::class, 'register']);


Route::post('/login', [UserController::class, 'login']);
Route::post('/logout', [UserController::class, 'logout'])->middleware('auth');

Route::get('/dashboard', function() {
    return view('dashboard');
})->middleware('auth');

Route::get('/articles/create', [ArticleController::class, 'create'])->middleware('auth');
Route::post('/articles', [ArticleController::class, 'store'])->middleware('auth');

