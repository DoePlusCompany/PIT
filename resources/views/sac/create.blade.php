@extends('layouts.app')

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Enviar Solicitação - SAC</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>
    <header id="home-header">
        <nav id="home-header-left">
            <h2>DOE+</h2>
            <ul id="home-header-items">
                <li> <a href="/">Inicio</a></li>

                <li><a href="/donations">Doações</a></li>

                <li><a href="/sac/create">Contato</a></li>
            </ul>
        </nav>

        <div id="hero-main-right">
            <div id="button-div-header-home-page">
                <a href="/login" id="button-header-home-page">LOGIN</a>
            </div>
    </header>

    <div class="container">
        <h2>Enviar Solicitação - SAC</h2>
        <p>Entre em contato conosco preenchendo o formulário abaixo. Responderemos o mais breve possível.</p>

        <!-- Mensagem de sucesso -->
        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <!-- Exibir erros de validação -->
        @if($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <!-- Formulário para enviar solicitação -->
        <form action="{{ route('sac.store') }}" method="POST">
            @csrf <!-- Proteção CSRF -->

            <!-- Nome do Cliente -->
            <div class="form-group">
                <label for="nome_cliente">Nome</label>
                <input type="text" class="form-control" id="nome_cliente" name="nome_cliente"
                    value="{{ old('nome_cliente') }}" placeholder="Digite seu nome completo" required>
            </div>

            <!-- E-mail do Cliente -->
            <div class="form-group">
                <label for="email_cliente">E-mail</label>
                <input type="email" class="form-control" id="email_cliente" name="email_cliente"
                    value="{{ old('email_cliente') }}" placeholder="Seu e-mail para contato" required>
            </div>

            <!-- Mensagem do Cliente -->
            <div class="form-group">
                <label for="mensagem">Mensagem</label>
                <textarea class="form-control" id="mensagem" name="mensagem" rows="5" placeholder="Digite sua mensagem"
                    required>{{ old('mensagem') }}</textarea>
            </div>

            <!-- Botão de envio -->
            <button type="submit" class="btn btn-primary">Enviar Solicitação</button>
        </form>
    </div>


</body>

</html>