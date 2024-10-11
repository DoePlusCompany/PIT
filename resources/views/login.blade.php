@extends('layouts.app')

@section('conteudo')
@if($errors->any())
    @foreach($errors->all() as $e)
        <p>{{ $e }}</p>
    @endforeach
@endif
<main id="main-login">

    <section id="login-container-main">
        <div class="left-login">
            <img src="/assets/loginImgs/loginImg.png" alt="imagem crianca" id="imagemLoginUser">
        </div>
    
        <div class="right-login">
            <form action="{{ route('login.authenticate') }}" method="post">
                <h1>FAÇA LOGIN</h1>
                @csrf

                <div id="master-inputs-login">

                    <div class="inputs-group-register-login">
                        <label for="email">Email:</label>
                        <input type="email" name="email" placeholder="usuario@email.com.br">
                    </div>
        
                    <div class="inputs-group-register-login">
                        <label for="password">Senha :</label>
                        <input type="password" name="password" placeholder="* * * * * * * * * *">
                    </div>    
                </div>

                <div id="espaco-button-cadastro-login-page">
                     <a href="/cadastro" id="cadastro-novo-login-page">Não tem uma conta? <span>realizar cadastro</span></a>
                </div>

                
    
                <div id="btnEnviarLogin">
                    <button type="submit">Entrar</button>
                </div>
            </form>
        </div>


    </section>


    
</main>

@endsection
