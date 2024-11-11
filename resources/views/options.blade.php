@extends('layouts.app')

@section('conteudo')


   

<main id="main-donations-page">

<div id="top-donation-page">
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
</div>

    <nav id="nav-donations-filter">
        
    <div id="group-select-donations-page">
        <div id="text-filter-donation">Filtrar por:</div>
        <div id="section-filter-top-left">
                <select name="estado" id="select-estado">
                    <option value="">Por estado:</option>
                    <option value="">teste</option>
                    <option value="">teste</option>
                    <option value="">teste</option>
                </select>
                <select name="categoria" id="select-categoria">
                    <option value="">Por categoria:</option>
                    <option value="">teste</option>
                    <option value="">teste</option>
                    <option value="">teste</option>
                </select>
            </div>
    </div>    

    <div id="section-filter-top-middle"></div>
    
    <div id="group-search-donations-page">
        <div id="section-filter-top-right">
                <input type="text" placeholder="Buscar por causas">
                <div id="search-icon"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" width="50%"><!--!Font Awesome Free 6.6.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path d="M416 208c0 45.9-14.9 88.3-40 122.7L502.6 457.4c12.5 12.5 12.5 32.8 0 45.3s-32.8 12.5-45.3 0L330.7 376c-34.4 25.2-76.8 40-122.7 40C93.1 416 0 322.9 0 208S93.1 0 208 0S416 93.1 416 208zM208 352a144 144 0 1 0 0-288 144 144 0 1 0 0 288z"/></svg></div>
        </div>
        
    </div> 
    
    



    </nav>

    <section id="main-section-donations-page">
        
        <div class="card-section-donation">
            <div class="card-image-donation"></div>
                <div class="first-section-card">
                    <h1>Arrecadando dinnheiro</h1>
                    <h2>Saude - Tratamento</h2>
                    <h3>Realizado por - ONG fulaninho</h3>
                </div>

                <div class="line-donation-card"></div>

                <div class="second-section-card">
                    <h2>Telefone - (31) 91234-5678</h2>
                    <h3>Email - freiotto@gmail.com</h3>
                </div>

                <div class="button-card-donation">
                    <button>AJUDAR</button>
                </div>
        </div>

        <div class="card-section-donation">
            <div class="card-image-donation"></div>
                <div class="first-section-card">
                    <h1>Arrecadando dinnheiro</h1>
                    <h2>Saude - Tratamento</h2>
                    <h3>Realizado por - ONG fulaninho</h3>
                </div>

                <div class="line-donation-card"></div>

                <div class="second-section-card">
                    <h2>Telefone - (31) 91234-5678</h2>
                    <h3>Email - freiotto@gmail.com</h3>
                </div>

                <div class="button-card-donation">
                    <button>AJUDAR</button>
                </div>
        </div>

        <div class="card-section-donation">
            <div class="card-image-donation"></div>
                <div class="first-section-card">
                    <h1>Arrecadando dinnheiro</h1>
                    <h2>Saude - Tratamento</h2>
                    <h3>Realizado por - ONG fulaninho</h3>
                </div>

                <div class="line-donation-card"></div>

                <div class="second-section-card">
                    <h2>Telefone - (31) 91234-5678</h2>
                    <h3>Email - freiotto@gmail.com</h3>
                </div>

                <div class="button-card-donation">
                    <button>AJUDAR</button>
                </div>
        </div>
        
        


    </section>
</main>
@endsection