<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\LoginController;

Route::get('/', function () {
    return view('index');
});

Route::get('/cadastro', function () {
    return view('register');
});

Route::get('/aboutus', function () {
    return view('aboutus');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/options', function () {
    return view('options');
});

Route::get('/testimonials', function () {
    return view('testimonials');
});

// Rota GET para exibir o formulário de login
Route::get('/login', [LoginController::class, 'login'])->name('login');

// Rota POST para processar a autenticação do login
Route::post('/login', [LoginController::class, 'authenticate'])->name('login.authenticate');

// Rota para exibir o formulário de registro (GET)
Route::get('/users/create', [UsersController::class, 'create'])->name('register.create');

// Rota para processar o formulário de registro (POST)
Route::post('/users/register', [UsersController::class, 'register'])->name('register');



