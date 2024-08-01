@extends('layouts.app')

@section('conteudo')

<div id="background">
    <div class="container">
        <header id="home-header">
            <nav id="home-header-left">
                <h2>Doa+</h2>
                <ul id="home-header-items">
                    <li>
                        <a href="">
                            Inicio
                        </a>
                    </li>
                    <li>
                        <a href="">
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
                        <h3>About us</h3>
                        <h2>Our Mission</h2>
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
                    Crie sua vaquinha, cause impacto!
                    Além disso, ao criar uma vaquinha você concorre ao Vakinha Premiada, o sorteio mensal para a comunidade ativa no Vakinha, no valor de R$ 15 mil.
                    E esse valor você poderá usar como quiser!
                </p>
            </div>
            <div id="Help-wrapper-bottom">
                <div class="Help-bottom-card">
                    <div class="Help-bottom-card-content">
                        <img src="assets/teste.png" alt="">
                        <h3>
                            Para você
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
        <img src="assets/retangulo-help.png" alt="">
    </section>


    <section id="footer">
        <div class="container">
            <div id="footer-wrapper">
                <div id="footer-wrapper-top">
                    <h2>Doa+</h2>
                    <div id="footer-wrapper-top-itens">
                        <ul>
                            <li>Lorem</li>
                            <li>First</li>
                            <li>Second</li>
                            <li>Third</li>
                        </ul>

                        <ul>
                            <li>Lorem</li>
                            <li>First</li>
                            <li>Second</li>
                            <li>Third</li>
                        </ul>

                        <ul>
                            <li>Lorem</li>
                            <li>First</li>
                            <li>Second</li>
                            <li>Third</li>
                        </ul>

                        <ul>
                            <li>Lorem</li>
                            <li>First</li>
                            <li>Second</li>
                            <li>Third</li>
                        </ul>
                    </div>
                </div>
                <div id="footer-wrapper-bottom">
                    <p>2024 Doa+ inc. All right reserved</p>
                    <p>Politica de Privacidade</p>
                    <p>Termos de uso </p>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection