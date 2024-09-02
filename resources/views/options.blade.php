@extends('layouts.app')

@section('conteudo')
    <div id="background_options_donations">
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
            <section id="section-explorer">
                <div id="section-explorer-wrapper">
                    <div id="section-explorer-top">
                        <div>
                            <label for="">Filtrar por:</label>
                                <div id="section-explorer-top-left">
                                    <select name="estado" id="">
                                        <option value="">Por estado:</option>
                                        <option value="">teste</option>
                                        <option value="">teste</option>
                                        <option value="">teste</option>
                                    </select>
                                    <select name="categoria" id="">
                                        <option value="">Por categoria:</option>
                                        <option value="">teste</option>
                                        <option value="">teste</option>
                                        <option value="">teste</option>
                                    </select>
                            </div>
                        </div>
                        <div id="section-explorer-top-right">
                            <input type="text" placeholder="Buscar por causas">
                        </div>
                    </div>
                    <div id="section-explorer-bottom">
                        <div class="card">
                            <img src="assets/imgExplorer1.png" alt="">
                            <h2>
                                <strong>
                                    Arrecadando Comida
                                </strong>
                            </h2>
                            <div class="typeCard">
                                <p>
                                    Saúde - Tratamento
                                </p>
                                <p>
                                    Realizado pela ONG
                                </p>
                            </div>
                            <div class="line">

                            </div>
                            <div class="informations">
                                <p>
                                    Telefone - (31) 99700 - 2244
                                </p>
                                <p>
                                    Email: doepluscompany@gmail.com
                                </p>
                            </div>
                            <button id="btn-donations-1">
                                AJUDAR
                            </button>
                        </div>
                        <div class="card">
                            <img src="assets/imgExplorer2.png" alt="">
                            <h2>
                                <strong>
                                    Arrecadando Roupas
                                </strong>
                            </h2>
                            <div class="typeCard">
                                <p>
                                    Saúde - Tratamento
                                </p>
                                <p>
                                    Realizado pela ONG
                                </p>
                            </div>
                            <div class="line">

                            </div>
                            <div class="informations">
                                <p>
                                    Telefone - (31) 99700 - 2244
                                </p>
                                <p>
                                    Email: doepluscompany@gmail.com
                                </p>
                            </div>
                            <button id="btn-donations-2">
                                AJUDAR
                            </button>
                        </div>
                        <div class="card">
                            <img src="assets/imgExplorer3.png" alt="">
                            <h2>
                                <strong>
                                    Arrecadando Dinheiro
                                </strong>
                            </h2>
                            <div class="typeCard">
                                <p>
                                    Saúde e Tratamento
                                </p>
                                <p>
                                    Realizado pela ONG
                                </p>
                            </div>
                            <div class="line">

                            </div>
                            <div class="informations">
                                <p>
                                    Telefone - (31) 99700 - 2244
                                </p>
                                <p>
                                    Email: doepluscompany@gmail.com
                                </p>
                            </div>
                            <button id="btn-donations-3">
                                AJUDAR
                            </button>
                        </div>
                    </div>
                </div>
            </section>
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