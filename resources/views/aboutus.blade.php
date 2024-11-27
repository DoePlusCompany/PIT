@extends('layouts.app')

<header id="home-header-about-us">

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

<div class="about-us-container">

    <main class="main-content">

        <!-- Seção Nossa História -->
        <section class="section-history">
            <h2 class="section-heading">Nossa História</h2>
            <p class="history-paragraph">
                Doe+ foi fundada recentemente com o objetivo de transformar o processo de doação, tornando-o mais
                acessível e eficiente para todos. Nossa jornada começou com um grupo de entusiastas da solidariedade,
                unidos pela missão de facilitar a conexão entre doadores e beneficiários.
            </p>
            <p class="history-paragraph">
                Desde o nosso início, fizemos progressos significativos ao estabelecer uma plataforma intuitiva que
                simplifica as doações e maximiza o impacto social. Em pouco tempo, conseguimos alcançar marcos
                importantes, como parcerias estratégicas com organizações chave e a implementação de novas ferramentas
                que aprimoram a experiência de doação.
                Hoje, continuamos a trabalhar com paixão e dedicação para expandir nossa rede de doadores e parceiros, e
                para apoiar ainda mais causas que fazem a diferença na vida das pessoas. Nossa missão é seguir
                promovendo a generosidade e criando um impacto positivo cada vez maior na sociedade.
            </p>
        </section>

        <!-- Seção Nossos Fundadores -->
        <section class="section-founders">
            <h2 class="section-heading">Nossos Fundadores</h2>

            <div class="founder-profile">
                <h3 class="founder-name">Arthur Martins</h3>
                <p class="founder-bio">Teach lead & Back-end developer</p>
            </div>

            <div class="founder-profile">
                <h3 class="founder-name">Caio de Souza</h3>
                <p class="founder-bio">Designer & Front-end developer</p>
            </div>

            <div class="founder-profile">
                <h3 class="founder-name">Daniel Veiga</h3>
                <p class="founder-bio">Back-end developer</p>
            </div>

            <div class="founder-profile">
                <h3 class="founder-name">Davi Lavarini</h3>
                <p class="founder-bio">Front-end developer</p>
            </div>

            <div class="founder-profile">
                <h3 class="founder-name">Kauan Gabriel</h3>
                <p class="founder-bio">Back-end developer</p>
            </div>
        </section>
    </main>
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
                    <li><a class="speedlinks" href="">Pages</a></li>
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