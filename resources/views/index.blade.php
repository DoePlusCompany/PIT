@extends('layouts.app')

@section('conteudo')

<div id="background">

    <!-- Seção Principal -->
    <section id="main-top-home">
        <header id="home-header">

            <!-- Navegação -->
            <nav id="home-header-left">
                <h2>DOE+</h2>
                <ul id="home-header-items">
                    <li><a href="/">Início</a></li>
                    <li><a href="/options">Explorar</a></li>
                    <li><a href="/blog">Blog</a></li>
                    <li><a href="/contact">Contato</a></li>
                    <li><a href="/testimonials">Depoimentos</a></li>
                </ul>
            </nav>

            <!-- Botão de Login -->
            <div id="hero-main-right">
                <div id="button-div-header-home-page">
                    @guest
                        <a href="/login" id="button-header-home-page">LOGIN</a>
                    @endguest
                </div>
            </div>
            
        </header>

        <!-- Imagem de Fundo -->
        <img src="assets/master-home-page.png" alt="Imagem principal">

        <!-- Botão Contribuir -->
        <button id="button-main-top-home">CONTRIBUIR</button>
    </section>

    <!-- Seção de Imagens -->
    <section id="imagens">
        <img src="assets/sectionImgs/first.png" alt="Imagem 1">
        <img src="assets/sectionImgs/second.png" alt="Imagem 2">
        <img src="assets/sectionImgs/third.png" alt="Imagem 3">
    </section>

    <section id="imagens">
        <img src="assets/sectionImgs/first.png" alt="Imagem 1">
        <img src="assets/sectionImgs/second.png" alt="Imagem 2">
        <img src="assets/sectionImgs/third.png" alt="Imagem 3">
    </section>

    <!-- Seção Nossa Missão -->
    <div class="container-OurMission">
        <section id="OurMission">
            <div id="OurMission-wrapper">
                <div id="identifider-bar-OurMission"></div>
                <div id="OurMission-left">
                    <div id="OurMission-headline">
                        <h3>Sobre nós</h3>
                        <h2>NOSSA MISSÃO</h2>
                        <p>Conectar doadores generosos a causas que transformam vidas, promovendo a solidariedade e o bem-estar social através de um sistema de doações transparente e eficiente.</p>
                    </div>
                    <button>
                        <p>Learn more</p>
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" width="12px" fill="white">
                            <path d="M278.6 233.4c12.5 12.5 12.5 32.8 0 45.3l-160 160c-12.5 12.5-32.8 12.5-45.3 0s-12.5-32.8 0-45.3L210.7 256 73.4 118.6c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0l160 160z"/>
                        </svg>
                    </button>
                </div>
                
                <div id="OurMission-right">
                    <img src="assets/ourvisionimg.png" alt="Nossa visão">
                </div>
            </div>
        </section>
    </div>

    <!-- Seção Ajuda -->
    <section id="help-container">
        <div id="main-help">
            <div id="Help-wrapper">
                <div id="Help-wrapper-top">
                    <h4>CONTRIBUA</h4>
                    <h2>QUERO <span> AJUDAR </span> O PRÓXIMO</h2>
                    <p>Temos várias categorias de doação disponíveis. Escolha uma das ONGs parceiras e faça sua contribuição! Procure por causas que te toquem ou use nossos filtros para encontrar algo que você queira apoiar. Junte-se a nós e ajude quem precisa!</p>
                </div>

                <div id="Help-wrapper-bottom">
                    <!-- Cards de Doação -->
                    @foreach(['Arrecadando roupas', 'Arrecadando alimentos', 'Arrecadando dinheiro'] as $help)
                        <div class="card-help">
                            <div class="info-help-card">
                                <h1>{{ $help }}</h1>
                                <h2>Saúde - Tratamento</h2>
                                <div class="user-email-help">
                                    <div id="user-icon-help"></div>
                                    <p>caiosouza@gmail.com</p>
                                </div>

                                <div class="arrow-card-help">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" width="25px">
                                        <path d="M278.6 233.4c12.5 12.5 12.5 32.8 0 45.3l-160 160c-12.5 12.5-32.8 12.5-45.3 0s-12.5-32.8 0-45.3L210.7 256 73.4 118.6c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0l160 160z"/>
                                    </svg>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>

    <!-- Barra para Voltar ao Topo -->
    <div id="main-bar-help">
        <div id="identifider-bar-help"></div>
    </div>

    <!-- Seção Blog -->
    <section id="blog">
        <div id="wrapper-blog">
            <div id="wrapper-blog-top">
                <h3>Blog</h3>
                <h2>DICAS, NOTÍCIAS E ARTIGOS</h2>
                <p>Artigos, dicas e recomendações para você ficar por dentro de tudo.</p>
            </div>

            <div id="wrapper-blog-bottom">
                <div id="sub-wrapper-blog-bottom">
                    <div id="sub-wrapper-blog-bottom-left">
                        <!-- Carrossel -->
                        <div id="carouselExample" class="carousel slide" data-ride="carousel">
                            <div class="carousel-inner">
                                @foreach ($imagens as $index => $imagem)
                                    <div class="carousel-item {{ $index === 0 ? 'active' : '' }}">
                                        <img src="{{ asset($imagem) }}" class="d-block img-fluid" alt="Imagem {{ $index + 1 }}">
                                    </div>
                                @endforeach
                            </div>
                            <a class="carousel-control-prev" href="#carouselExample" role="button" data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Anterior</span>
                            </a>
                            <a class="carousel-control-next" href="#carouselExample" role="button" data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Próximo</span>
                            </a>
                        </div>
                    </div>

                    <div id="sub-wrapper-blog-bottom-right">
                        <div id="sub-01">
                            <div></div>
                            <p>Estamos construindo o mais relevante ecossistema de ONGs online do Brasil</p>
                        </div>
                        <div id="sub-02">
                            <div></div>
                            <p>Loja online estimula novas formas de apoiar causas emergenciais</p>
                        </div>
                        <div id="sub-03">
                            <div></div>
                            <p>A Maior Campanha Solidária do RS se Une à Maior Faxina Voluntária da História do RS!</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Voltar ao Topo -->
    <section id="back-top-home-page">
        <a href="#" id="button-back-top-home-page">VOLTAR AO TOPO</a>
    </section>

</div>

@endsection
