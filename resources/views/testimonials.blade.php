@extends('layouts.app')

@section('conteudo')

<div class="container">
    <!-- Header -->
    <header id="home-header">
        <nav id="home-header-left">
            <h2>Doa+</h2>
            <ul id="home-header-items">
                <li><a href="/">Inicio</a></li>
                <li><a href="/options">Explorar</a></li>
                <li><a href="/blog">Blog</a></li>
                <li><a href="/contact">Contact</a></li>
                <li><a href="/testimonials">Testimonials</a></li>
            </ul>
        </nav>
        <button>Contribua</button>
    </header>

    <!-- Testimonials Section -->
    <div class="container-testimonials">
        <div class="testimonial-section">
            <h2>Depoimentos</h2>
        </div>
        <div class="testimonial-container">
            <!-- Testimonial 1 -->
            <div class="testimonial-card">
                <img src="https://via.placeholder.com/80" alt="Ana Silva" class="testimonial-img">
                <h5 class="testimonial-name">Ana Silva</h5>
                <p class="testimonial-content">
                    "A experiência de doar foi incrível. Ver o impacto positivo foi extremamente gratificante."
                </p>
            </div>

            <!-- Testimonial 2 -->
            <div class="testimonial-card">
                <img src="https://via.placeholder.com/80" alt="João Pereira" class="testimonial-img">
                <h5 class="testimonial-name">João Pereira</h5>
                <p class="testimonial-content">
                    "Contribuir para essa causa me fez sentir parte de algo muito maior. Recomendo a todos!"
                </p>
            </div>

            <!-- Testimonial 3 -->
            <div class="testimonial-card">
                <img src="https://via.placeholder.com/80" alt="Mariana Souza" class="testimonial-img">
                <h5 class="testimonial-name">Mariana Souza</h5>
                <p class="testimonial-content">
                    "Foi muito fácil doar, e a transparência do processo me deu muita confiança na instituição."
                </p>
            </div>
        </div>
    </div>
</div>
@endsection
