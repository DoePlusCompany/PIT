@extends('layouts.app')

@section('conteudo')
    <div id="background_options_donations">
        <div class="container">
            <header id="home-header">
                <nav id="home-header-left">
                    <h2>Doa+</h2>
                    <ul id="home-header-items">
                        <li>
                            <a href="/options">
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
                        </div>
                        <div class="card">
                            <img src="assets/imgExplorer2.png" alt="">
                        </div>
                        <div class="card">
                            <img src="assets/imgExplorer3.png" alt="">
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
@endsection