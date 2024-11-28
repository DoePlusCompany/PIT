@extends('layouts.app')

<body>
    <header id="home-header-sac-create">
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
        <h2>Formulário de Contato - SAC</h2>
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

    <section id="footer">
        <div id="footer-wrapper">
            <div id="footer-wrapper-left">
                <div id="footer-wrapper-itens">
                    <ul>
                        <li>Siga-nos</li>

                        <li>WhatsApp</li>
                        <li>Instagram</li>
                        <li>Linkedin</li>
                        <li>Facebook</li>
                        <li>TikTok</li>
                    </ul>
                    <ul>
                        <li>Idealizadores</li>

                        <li>Arthur Martins</li>
                        <li>Daniel Isaac</li>
                        <li>Caio de Souza</li>
                        <li>Davi Lavarini</li>
                        <li>Kauan Gabriel</li>
                    </ul>
                    <ul>
                        <li>Links rápidos</li>

                        <li><a class="speedlinks" href="/aboutus">Sobre Nós</a></li>
                        <li><a class="speedlinks" href="/sac/create">SAC</a></li>
                        <li><a class="speedlinks" href="/faq/faqs">Dúvidas frequentes</a></li>
                        <li><a class="speedlinks" href="/donations">Doações</a></li>
                        <li><a class="speedlinks" href="/profile">Perfil de Usuário</a></li>
                    </ul>
                </div>
            </div>
            <div id="footer-wrapper-right">
                <div id="fale-conosco">
                    <h2>
                        Fale conosco
                    </h2>
                    <div>
                        <p>
                            Email: doepluscompany@gmail.com
                        </p>
                        <p>
                            Telefone: (31) 99700-2244
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>


</body>