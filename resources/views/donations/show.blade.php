@extends('layouts.app')

@section('conteudo')
<!DOCTYPE html>
<html>

<head>
    <title>Detalhes da Doação</title>
</head>

<body>
    <header id="home-header-details-donations">
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
    <section id="section-details-donations">
        <div class="container-details-donations">
            <h1>{{ $donation->title }}</h1>
            <p><strong>Tipo de Doação:</strong> {{ $donation->donation_type }}</p>
            <p><strong>Descrição:</strong> {{ $donation->description }}</p>
            <p><strong>Nome da Ong:</strong> {{ $donation->name_ong }}</p>
            <p><strong>Chave pix:</strong> {{ $donation->chave_pix }}</p>
            <p><strong>Telefone:</strong> {{ $donation->phone }}</p>
            <p><strong>Email:</strong> {{ $donation->email }}</p>
            <p><strong>Endereço:</strong> {{ $donation->address }}</p>
            <a href="{{ url()->previous() }}">Voltar para a lista</a>
        </div>
    </section>

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
                        <li><a class="speedlinks" href="">Pages</a></li>
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

</html>

@endsection