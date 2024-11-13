<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\CarrosselController;
use App\Http\Controllers\SACController;
use App\Http\Controllers\DonationController;

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

Route::get('/', [CarrosselController::class, 'index']);

Route::get('/sac/create', [SACController::class, 'create'])->name('sac.create');
Route::post('/sac/store', [SACController::class, 'store'])->name('sac.store');
Route::get('/sac', [SACController::class, 'index'])->name('sac.index');
Route::put('/sac/update/{id}', [SACController::class, 'update'])->name('sac.update');
Route::post('/sac/solicitacao/{id}/atualizar', [SACController::class, 'update'])->name('sac.update');
Route::delete('sac/{id}', [SACController::class, 'destroy'])->name('sac.destroy');

Route::get('/donations', [DonationController::class, 'index'])->name('donations.index');
Route::get('/donations/create', [DonationController::class, 'create'])->name('donations.create');
Route::post('/donations', [DonationController::class, 'store'])->name('donations.store');
Route::get('/doacao/{id}', [DonationController::class, 'show'])->name('doacao.show');









