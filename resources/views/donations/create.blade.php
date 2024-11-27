@extends('layouts.app')

@section('conteudo')


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

<section class="container">
    <form id="container-create-donations" action="{{ route('donations.store') }}" method="POST">
        <h2>Crie sua doação</h2>
        @csrf
        <label for="title">Título:</label>
        <input type="text" class="form-control" name="title" required>

        <label for="description">Descrição:</label>
        <textarea name="description" class="form-control" required></textarea>

        <label for="donation_type">Tipo da Doação:</label>
        <select name="donation_type" class="form-control" required>
            <option value="">Selecione</option>
            <option value="Alimento">Alimento</option>
            <option value="Roupas">Roupas</option>
            <option value="Dinheiro">Dinheiro</option>
            <!-- Adicione mais tipos de doação conforme necessário -->
        </select>

        <label for="name_ong">Nome da Ong:</label>
        <input type="text" class="form-control" name="name_ong" required>

        <label for="chave_pix">Chave Pix:</label>
        <input type="text" class="form-control" name="chave_pix" required>

        <button type="submit" class="btn btn-primary">Criar</button>
    </form>
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
                    <li><a class="speedlinks" href="">Pages</a></li>
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
@endsection