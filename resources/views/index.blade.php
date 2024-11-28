@extends('layouts.app')

@section('conteudo')

<div id="background">
    <section id="main-top-home">
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
        <img src="assets/master-home-page.png" alt="">

        <button id="button-main-top-home">CONTRIBUIR</button>
    </section>

    <section id="blocos-coloridos">
        <div id="blocos-alimento">ALIMENTAÇÃO</div>
        <div id="blocos-roupas">ROUPAS</div>
        <div id="blocos-dinheiro">DINHEIRO</div>

    </section>

    <!-- inicio secao de nossa missao -->


    <div class="container-OurMission">
        <section id="OurMission">
            <div id="OurMission-wrapper">
                <div id="identifider-bar-OurMission"></div>
                <div id="OurMission-left">
                    <div id="OurMission-headline">
                        <h3>Sobre nós</h3>
                        <h2>NOSSA MISSÃO</h2>
                        <p>Conectar doadores generosos a causas que transformam vidas,
                            promovendo a solidariedade e o bem-estar social através de
                            um sistema de doações transparente e eficiente.
                        </p>
                    </div>
                    <button >
                        <p>
                            <a class="link" href="/aboutus">
                                Saiba mais
                            </a>
                        </p>
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" width="12px"
                            fill="white"><!--!Font Awesome Free 6.6.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                            <path
                                d="M278.6 233.4c12.5 12.5 12.5 32.8 0 45.3l-160 160c-12.5 12.5-32.8 12.5-45.3 0s-12.5-32.8 0-45.3L210.7 256 73.4 118.6c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0l160 160z" />
                        </svg>
                    </button>
                </div>

                <div id="OurMission-right">
                    <img src="assets/ourvisionimg.png" alt="">
                </div>
            </div>
        </section>
    </div>




    <section id="help-container">
        <div id="main-help">
            <div id="Help-wrapper">
                <div id="Help-wrapper-top">
                    <h4>
                        CONTRIBUA
                    </h4>
                    <h2>
                        QUERO <span> AJUDAR </span> O PROXÍMO
                    </h2>
                    <p>
                        Temos várias categorias de doação disponíveis. Escolha uma das ONGs parceiras e faça sua
                        contribuição! Procure por causas que te toquem ou use
                        nossos filtros para encontrar algo que você queira apoiar. Junte-se a nós e ajude quem precisa!
                    </p>
                </div>

                <div id="Help-wrapper-bottom">
                    <div class="card-help">
                        <div id="identifider-line-help"></div>
                        <div class="info-help-card">
                            <h1>Arrecadando roupas</h1>
                            <h2>Saúde - Tratamento</h2>
                           

                            <div class="arrow-card-help"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512"
                                    width="25px"><!--!Font Awesome Free 6.6.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                                    <path
                                        d="M278.6 233.4c12.5 12.5 12.5 32.8 0 45.3l-160 160c-12.5 12.5-32.8 12.5-45.3 0s-12.5-32.8 0-45.3L210.7 256 73.4 118.6c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0l160 160z" />
                                </svg></div>


                        </div>

                    </div>

                    <div class="card-help">
                        <div id="identifider-line-help-2"></div>
                        <div class="info-help-card">
                            <h1>Arrecadando alimentos</h1>
                            <h2>Saúde - Tratamento</h2>
                            

                            <div class="arrow-card-help"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512"
                                    width="25px"><!--!Font Awesome Free 6.6.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                                    <path
                                        d="M278.6 233.4c12.5 12.5 12.5 32.8 0 45.3l-160 160c-12.5 12.5-32.8 12.5-45.3 0s-12.5-32.8 0-45.3L210.7 256 73.4 118.6c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0l160 160z" />
                                </svg></div>


                        </div>

                    </div>

                    <div class="card-help">
                        <div id="identifider-line-help-3"></div>
                        <div class="info-help-card">
                            <h1>Arrecadando dinheiro</h1>
                            <h2>Saúde - Tratamento</h2>
                           

                            <div class="arrow-card-help"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512"
                                    width="25px"><!--!Font Awesome Free 6.6.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                                    <path
                                        d="M278.6 233.4c12.5 12.5 12.5 32.8 0 45.3l-160 160c-12.5 12.5-32.8 12.5-45.3 0s-12.5-32.8 0-45.3L210.7 256 73.4 118.6c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0l160 160z" />
                                </svg></div>


                        </div>

                    </div>


                </div>

            </div>
        </div>

        <div id="main-bar-help">
            <div id="identifider-bar-help"></div>
        </div>

    </section>

    <!-- inicio da secao de blog -->

    <section id="blog">
        <div id="wrapper-blog">
            <div id="wrapper-blog-top">
                <h3>Blog</h3>
                <h2>DICAS, NOTICIAS E ARTIGOS</h2>
                <p>Artigos, dicas e recomendações para você ficar por dentro de tudo</p>
            </div>
            <div id="wrapper-blog-bottom">
                <div id="sub-wrapper-blog-bottom">
                    <div id="sub-wrapper-blog-bottom-left">
                        <!-- Carrossel colocado aqui -->
                        <div id="carouselExample" class="carousel slide" data-ride="carousel">
                            <div class="carousel-inner">
                                @foreach ($imagens as $index => $imagem)
                                    <div class="carousel-item {{ $index === 0 ? 'active' : '' }}">
                                        <img src="{{ asset($imagem) }}" class="d-block img-fluid"
                                            alt="Imagem {{ $index + 1 }}">
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
                </div>
            </div>
        </div>
    </section>

    <!-- fim da secao de blog -->

    <!-- Inicio da secao de depoimentos -->

    <section>
        <!-- Testimonials Section -->
        <div class="container-testimonials">
            <div class="testimonial-section">
                <h2>Depoimentos</h2>
            </div>
            <div class="testimonial-container">
                <!-- Testimonial 1 -->
                <div class="testimonial-card">
                    <h5 class="testimonial-name">Ana Silva</h5>
                    <p class="testimonial-content">
                        "A experiência de doar foi incrível. Ver o impacto positivo foi extremamente gratificante."
                    </p>
                </div>

                <!-- Testimonial 2 -->
                <div class="testimonial-card">
                    <h5 class="testimonial-name">João Pereira</h5>
                    <p class="testimonial-content">
                        "Contribuir para essa causa me fez sentir parte de algo muito maior. Recomendo a todos!"
                    </p>
                </div>

                <!-- Testimonial 3 -->
                <div class="testimonial-card">
                    <h5 class="testimonial-name">Mariana Souza</h5>
                    <p class="testimonial-content">
                        "Foi muito fácil doar, e a transparência do processo me deu muita confiança na instituição."
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Fim da secao de depoimentos -->

    <section id="back-top-home-page">
        <a href="#" id="button-back-top-home-page">VOLTAR AO TOPO</a>

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

    @endsection