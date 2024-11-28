<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DOE+</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Sora:wght@100..800&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    @vite('resources/css/app.css')
    @vite('resources/css/home.css')
    @vite('resources/css/contact.css')
    @vite('resources/css/footer.css')
    @vite('resources/css/cadastro.css')
    @vite('resources/css/login.css')
    @vite('resources/css/donationsOptions.css')
    @vite('resources/css/testmonials.css')
    @vite('resources/css/cardDonation.css')
    @vite('resources/css/sacCreate.css')
    @vite('resources/css/sac.css')
    @vite('resources/css/aboutUs.css')
    @vite('resources/css/showDonations.css')
    @vite('resources/css/faq.css')
    @vite('resources/css/donationCreate.css')
    @vite('resources/css/showProfile.css')


</head>
    
<body>
    <main>

    <!-- <header id="home-header">
        <nav id="home-header-left">
            <h2>DOE+</h2>
            <ul id="home-header-items">
                <li><a href="/">Inicio</a></li>
                <li><a href="/options">Explorar</a></li>
                <li><a href="/blog">Blog</a></li>
                <li><a href="/contact">Contact</a></li>
                <li><a href="/testimonials">Testimonials</a></li>
            </ul>
        </nav>
        <button>Contribua</button>
    </header> -->

    @yield('conteudo')

    <!-- <section id="footer">
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
    </section> -->

    </main>
    @vite('resources/js/app.js')
</body>

</html>