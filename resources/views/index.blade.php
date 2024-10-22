@extends('layouts.app')

@section('conteudo')

<div id="background">
<section id="main-top-home">
    <header id="home-header">
            <nav id="home-header-left">
                <h2>DOE+</h2>
                <ul id="home-header-items">
                    <li> <a href="/">Inicio</a></li>
                    
                    <li><a href="/options">Explorar</a></li>
                    
                    <li><a href="/blog">Blog</a></li>
                    
                    <li><a href="/contact">Contact</a></li>
                    
                    <li><a href="/testimonials">Testimonials</a></li>
                
                </ul>
            </nav>

            <div id="hero-main-right">
                <div id="button-div-header-home-page">
                    <a href="/login" id="button-header-home-page">LOGIN</a>
                </div>
          
            
        </div>
            
        </header>

        <img src="assets/master-home-page.png" alt="">

        <button id="button-main-top-home">CONTRIBUIR</button>
    </section>


    <section id="imagens">
        <img src="assets/sectionImgs/first.png" alt="">
        <img src="assets/sectionImgs/second.png" alt="">
        <img src="assets/sectionImgs/third.png" alt="">
    </section>


    <section id="imagens">
        <img src="assets/sectionImgs/first.png" alt="">
        <img src="assets/sectionImgs/second.png" alt="">
        <img src="assets/sectionImgs/third.png" alt="">
    </section>












<!-- inicio secao de nossa missao -->


    <div class="container-OurMission">
        <section id="OurMission">
            <div id="OurMission-wrapper">
                <div id="identifider-bar-OurMission"></div>
                <div id="OurMission-left">
                    <div id="OurMission-headline">
                        <h3>Sobre</h3>
                        <h2>Nossa missão</h2>
                        <p>Conectar doadores generosos a causas que transformam vidas,
                            promovendo a solidariedade e o bem-estar social através de
                            um sistema de doações transparente e eficiente.
                        </p>
                    </div>
                    <button>
                        Learn more
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
                QUERO <span> AJUDAR </span> o próximo
                </h2>
                <p>
                Temos várias categorias de doação disponíveis. Escolha uma das ONGs parceiras e faça sua contribuição! Procure por causas que te toquem ou use 
                nossos filtros para encontrar algo que você queira apoiar. Junte-se a nós e ajude quem precisa!
                </p>
            </div>

            <div id="Help-wrapper-bottom">
                <div class="card-help">
                    <div id="identifider-line-help"></div>
                    <div class="info-help-card">
                        <h1>Arrecadando roupas</h1>
                        <h2>Saúde - Tratamento</h2>
                        <div class="user-email-help">
                            <div id="user-icon-help"></div>
                            <p>caiosouza@gmail.com</p>
                        </div>
                        

                    </div>

                </div>

                <div class="card-help">
                    <div id="identifider-line-help-2"></div>
                    <div class="info-help-card">
                        <h1>Arrecadando alimentos</h1>
                        <h2>Saúde - Tratamento</h2>
                        <div class="user-email-help">
                            <div id="user-icon-help-2"></div>
                            <p>caiosouza@gmail.com</p>
                        </div>
                        

                    </div>

                </div>

                <div class="card-help">
                    <div id="identifider-line-help-3"></div>
                    <div class="info-help-card">
                        <h1>Arrecadando dinheiro</h1>
                        <h2>Saúde - Tratamento</h2>
                        <div class="user-email-help">
                            <div id="user-icon-help-3"></div>
                            <p>caiosouza@gmail.com</p>
                        </div>
                        

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

<section id="back-top-home-page">
<a href="#" id="button-back-top-home-page">VOLTAR AO TOPO</a>
    
</section>



<!-- fim da secao de blog -->


@endsection