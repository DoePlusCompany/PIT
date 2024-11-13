<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\CarrosselController;
use App\Http\Controllers\SACController;
use App\Http\Controllers\DonationController;
use App\Http\Controllers\FaqController;


//Dúvidas frequentes
Route::get('/faq/faqs', [FaqController::class, 'index']);


// Página inicial
Route::get('/', function () {
    return view('index');
});

// Página de cadastro (formulário de registro)
Route::get('/cadastro', function () {
    return view('register');
});

// Página sobre nós
Route::get('/aboutus', function () {
    return view('aboutus');
});

// Página de contato
Route::get('/contact', function () {
    return view('contact');
});

// Página de opções (exemplo de página de opções para usuários)
Route::get('/options', function () {
    return view('options');
});

// Página de depoimentos
Route::get('/testimonials', function () {
    return view('testimonials');
});

// Rota GET para exibir o formulário de login
Route::get('/login', [LoginController::class, 'login'])->name('login');

// Rota POST para processar a autenticação do login
Route::post('/login', [LoginController::class, 'authenticate'])->name('login.authenticate');

// Rota GET para exibir o formulário de registro (criação de usuário)
Route::get('/users/create', [UsersController::class, 'create'])->name('register.create');

// Rota POST para processar o formulário de registro e criar um usuário
Route::post('/users/register', [UsersController::class, 'register'])->name('register');

// Página inicial com o carrossel de imagens
Route::get('/', [CarrosselController::class, 'index']);

// Rotas do SAC (Sistema de Atendimento ao Cliente)

// Rota GET para exibir o formulário de criação de solicitação SAC
Route::get('/sac/create', [SACController::class, 'create'])->name('sac.create');

// Rota POST para salvar a solicitação no SAC
Route::post('/sac/store', [SACController::class, 'store'])->name('sac.store');

// Rota GET para listar as solicitações do SAC
Route::get('/sac', [SACController::class, 'index'])->name('sac.index');

// Rota PUT para atualizar uma solicitação existente no SAC
Route::put('/sac/update/{id}', [SACController::class, 'update'])->name('sac.update');

// Rota POST para atualizar uma solicitação no SAC (alternativa)
Route::post('/sac/solicitacao/{id}/atualizar', [SACController::class, 'update'])->name('sac.update');

// Rota DELETE para excluir uma solicitação no SAC
Route::delete('sac/{id}', [SACController::class, 'destroy'])->name('sac.destroy');

// Rotas de Doações

// Rota GET para listar todas as doações
Route::get('/donations', [DonationController::class, 'index'])->name('donations.index');

// Rota GET para exibir o formulário de criação de doação
Route::get('/donations/create', [DonationController::class, 'create'])->name('donations.create');

// Rota POST para salvar uma nova doação
Route::post('/donations', [DonationController::class, 'store'])->name('donations.store');

// Rota GET para exibir os detalhes de uma doação específica
Route::get('/doacao/{id}', [DonationController::class, 'show'])->name('doacao.show');