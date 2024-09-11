@extends('layouts.app')

@section('conteudo')
@if($errors->any())
    @foreach($errors->all() as $e)
        <p>{{ $e }}</p>
    @endforeach
@endif
<main>
    <div class="left">
        <img src="assets/loginImgs/crianca-login.png" alt="imagem crianca" id="imagemLoginUser">
    </div>

    <div class="right">
        <form action="{{ route('login.authenticate') }}" method="post">
            <h1>FAÇA LOGIN</h1>
            @csrf
            <div class="inpLogin">
                <label for="email">Email:</label>
                <input type="email" name="email" placeholder="usuario@email.com.br">
            </div>

            <div class="inpLogin">
                <label for="password">Senha :</label>
                <input type="password" name="password" placeholder="* * * * * * * * * *">
            </div>

            <div>
                <div id="infoInferiores">
                    <div id="iconsRedeSocial">
                        <button id="googleIcon">Google Icon</button>
                        <button id="faceboockIcon">Facebook Icon</button>
                    </div>

                    <div id="esqueciSenha">
                        <p>Esqueci minha <span>senha</span></p>
                    </div>
                </div>
            </div>

            <div id="btnEnviarLogin">
                <button type="submit">Entrar</button>
            </div>
        </form>
    </div>
</main>
@endsection
