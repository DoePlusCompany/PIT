@extends('layouts.app')

@section('conteudo')

<div id="background">
    <div class="container">
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
            <button>
                Contribua
            </button>
        </header>

        <section id="hero">
            <div id="hero-wrapper">
                <div id="hero-wrapper-left">
                    <h1>
                        Transformamos generosidade em impacto real
                    </h1>
                    <h4>
                        Somos a ponte entre quem deseja ajudar e quem precisa de apoio!
                    </h4>
                    <div id="hero-wrapper-btns">
                        <button>
                            Doar
                        </button>
                        <button>
                            Cadastrar instituição
                        </button>
                    </div>
                </div>
                <div id="hero-wrapper-right">
                    <img src="assets/siblings.png" alt="">
                </div>
            </div>
        </section>
    </div>


    <section id="imagens">
        <img src="assets/sectionImgs/first.png" alt="">
        <img src="assets/sectionImgs/second.png" alt="">
        <img src="assets/sectionImgs/third.png" alt="">
    </section>


    <div class="container-OurMission">
        <section id="OurMission">
            <div id="OurMission-wrapper">
                <img src="assets/ourMissionImgs/retangulo-OurMission.png" alt="">
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
                    <img src="assets/ourMissionImgs/ourmission.png" alt="">
                </div>
            </div>
        </section>
    </div>

    <div class="container-OurVision">
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
    </div>


    <section id="Help">
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
                        <img src="assets/teste.png" alt="">
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
                        <img src="assets/teste.png" alt="">
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
                        <img src="assets/teste.png" alt="">
                        <h3>
                            Para parceiros
                        </h3>
                        <p>
                            Realize uma contribuição ou doação para ajudar!
                        </p>
                        <img src="assets/arrow.png" alt="">
                    </div>
                </div>
            </div>
        </div>
        <!-- <img src="assets/retangulo-help.png" alt=""> -->
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

                            <li>Página 01</li>
                            <li>Página 02</li>
                            <li>Página 03</li>
                            <li>Página 04</li>
                            <li>Página 05</li>
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
                                Email: teste@gmail.com
                            </p>
                            <p>
                                Telefone: telefone@gmail.com
                            </p>
                        </div>
                    </div>
                </div>
            </div>
    </section>
</div>
@endsection