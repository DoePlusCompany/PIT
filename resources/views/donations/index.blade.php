@extends('layouts.app')

@section('conteudo')

<body>

    <header id="home-header">
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

    <main id="main-center-donations">
        <h1 class="titulo-h1">Lista de Doações</h1>

        <!-- Formulário de filtro -->
        <form method="GET" action="{{ route('donations.index') }}" id="form-donation">
            <select name="donation_type" id="donation_type">
                <option value="">Selecione</option>
                <!-- Aqui você pode preencher os tipos de doações dinamicamente, se necessário -->
                <option value="Alimento">Alimento</option>
                <option value="Roupas">Roupas</option>
                <option value="Dinheiro">Dinheiro</option>
                <!-- Adicione outros tipos conforme sua necessidade -->
            </select>
            <button type="submit" id="btn-donation">Filtrar</button>
        </form>

        <!-- Grid de doações -->
        <div class="grid-container">
            @foreach($donations as $donation)

                <div class="card-section-donation">
                    <div class="card-image-donation"></div>
                    <div class="first-section-card">
                        <h1>{{ $donation->title }}</h1>
                        <h2>{{ $donation->donation_type }}</h2>
                        <h3>Realizado por - {{ $donation->name_ong }}</h3>
                    </div>

                    <div class="line-donation-card"></div>

                    <div class="second-section-card">
                        <h2>Telefone - (31) 91234-5678</h2>
                        <h3>Chave Pix -{{ $donation->chave_pix }}</h3>
                    </div>

                    <div class="button-card-donation">
                        <a href="{{ route('doacao.show', $donation->id) }}">
                            <button>Ver mais</button>
                        </a>
                    </div>


                </div>


                <!-- <div class="card">
                            <h3>{{ $donation->title }}</h3>
                            <p>{{ $donation->description }}</p>
                            <p><strong>Tipo:</strong> {{ $donation->donation_type }}</p>
                            <p><strong>Nome da ONG:</strong> {{ $donation->name_ong }}</p>
                            <p><strong>Chave Pix:</strong> {{ $donation->chave_pix }}</p>
                            <a href="{{ route('doacao.show', $donation->id) }}">
                                <button>Ver mais</button>
                            </a>
                        </div> -->
            @endforeach
        </div>

    </main>

</body>

@endsection