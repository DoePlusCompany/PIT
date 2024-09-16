@extends('layouts.app')

@section('conteudo')

<div id="background">
    <div class="container">
    </div>
    <section id="hero">
        <div id="hero-main-left">
            <header id="home-header">
            <nav id="home-header-left">
                <h2>Doa+</h2>
                <ul id="home-header-items">
                    <li>
                        <a href="/">
                            Inicio
                        </a>
                    </li>
                    <li>
                        <a href="/options">
                            Explorar
                        </a>
                    </li>
                    <li>
                        <a href="/blog">
                            Blog
                        </a>
                    </li>
                    <li>
                        <a href="/contact">
                            Contact
                        </a>
                    </li>
                    <li>
                    <a href="/testimonials">
                    Testimonials
                    </a>
                </li>
                </ul>
            </nav>
            
        </header> 
        <img src="assets/siblings.png" alt="">
        </div>
        <div id="hero-main-right">
            <button>
                Contribua
            </button>
            <img src="assets/Group 6.png" alt="">
            
        </div>
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

    <!-- <div class="container-OurVision">
        <section id="OurVision">
            <div id="OurVision-wrapper">
                <img src="assets/retangulo-OurVision.png" alt="">
                <div id="OurVision-left">
                    <div id="OurVision-headline">
                        <h3>Sobre</h3>
                        <h2>Nossa Visão</h2>
                        <p> 
                            Fortalecer as comunidades onde atuamos, 
                            promovendo a inclusão e o bem-estar através de doações que 
                            geram um impacto positivo na vida das pessoas.
                        </p>
                    </div>
                    <button>
                        Learn more
                    </button>
                </div>
                <div id="OurVision-right">
                    <img src="assets/ourvisionimg.png" alt="">
                </div>
            </div>
        </section>
    </div> -->
    
    
<!-- fim da secao de nossa missao -->












<!-- inicio da secao de ajuda -->

    <!-- <section id="Help">
        <div id="Help-wrapper">
            <div id="Help-wrapper-top">
                <h4>
                    Contribua
                </h4>
                <h2>
                    Quer <span> ajudar </span> o próximo?
                </h2>
                <p>
                Sua generosidade pode mudar vidas. Com uma simples doação, você pode fazer parte de uma causa maior, ajudando aqueles que mais precisam.
                 Junte-se a nós nessa missão de transformação. Contribua hoje e veja como sua ajuda pode fazer a diferença
                </p>
            </div>
            <div id="Help-wrapper-bottom">
                <div class="Help-bottom-card">
                    <div class="Help-bottom-card-content">
                    <div class="card-line">line</div>
                        <h3>
                            Para pessoas físicas
                        </h3>
                        <p>
                            Realize uma contribuição ou doação para ajudar!
                        </p>
                        <img src="assets/arrow.png" alt="">
                    </div>
                </div>
                <div class="Help-bottom-card">
                    <div class="Help-bottom-card-content">
                    <div class="card-line">line</div>
                        <h3>
                            Para instituições
                        </h3>
                        <p>
                            Realize uma contribuição ou doação para ajudar!
                        </p>
                        <img src="assets/arrow.png" alt="">
                    </div>
                </div>
                <div class="Help-bottom-card">
                    <div class="Help-bottom-card-content">
                       <div class="card-line">line</div>
                        <h3>
                            Para parceiros
                        </h3>
                        <p>
                            Realize uma contribuição ou doação para ajudar!
                        </p>
                        <img src="assets/arrow.png" alt="">
                    </div>
                </div>

                <div id="identifider-bar-help"></div>
            </div>

            
        </div>
         <img src="assets/retangulo-help.png" alt=""> 
    </section> -->

<!-- fim da secao de ajuda -->


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

    <div id="identifider-bar-help"></div>

</section>












<!-- inicio da secao de blog -->


    <section id="blog">
        <div id="wrapper-blog">
            <div id="wrapper-blog-top">
                <h3>Blog</h3>
                <h2>DICAS, NOTICIAS E ARTIGOS</h2>
                <P>Artigos, dicas e recomendações para você ficar por dentro de tudo</P>
            </div>
            <div id="wrapper-blog-bottom">
                <div id="sub-wrapper-blog-bottom">
                    <div id="sub-wrapper-blog-bottom-left">
                        .
                    </div>
                    <div id="sub-wrapper-blog-bottom-right">
                        <div id="sub-01">
                            <div>
                                
                            </div>
                            <p>
                            Estamos construindo o mais relevante ecossistema de ONGs online do Brasil 
                            </p>
                        </div>
                        <div id="sub-02">
                            <div>
                                
                            </div>
                            <p> Loja online estimula novas formas de apoiar causas emergenciais </p>
                        </div>
                        <div id="sub-03">
                            <div>
                                    
                            </div>
                            <p> A Maior Campanha Solidária do RS se Une à Maior Faxina Voluntária da História do RS!</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


<!-- fim da secao de blog -->

@endsection