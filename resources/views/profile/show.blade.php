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

</header>
<section class="body-profile">
    <div class="profile-container">
        <div class="profile-header">
            <!-- Ícone genérico de perfil -->
            <div class="profile-icon">👤</div>
            <h1>Perfil de {{ $user->name }}</h1>
        </div>
        <div class="profile-info">
            <p><span>Email:</span> {{ $user->email }}</p>
            <p><span>Endereço:</span> {{ $user->address }}</p>
            <p><span>Telefone:</span> {{ $user->phone }}</p>
            <p><span>Bio:</span> {{ $user->bio }}</p>
        </div>
        <div class="profile-actions">
            <a href="{{ route('profile.edit') }}">Editar Perfil</a>
            <form action="{{ route('logout') }}" method="POST">
                @csrf
                <button class="deslogar-btn" type="submit">Deslogar</button>
            </form>
        </div>
    </div>
</section>
