@extends('layouts.app')

@section('conteudo')
<main>
    <div class="left">
        <img src="assets/loginImgs/crianca-login.png" alt="imagem crianca" id="imagemLoginUser">
    </div>

    <div class="righ">

        <form action="login">
            <h1>FAÇA LOGIN</h1>

            <div class="inpLogin">
                <label for="name">Nome:</label>
                <input type="text" placeholder="usuario">
            </div>

            <div class="inpLogin">
                <label for="name">Email:</label>
                <input type="email" placeholder="usuario@email.com.br">
            </div>

            <div class="inpLogin">
                <label for="password">Senha :</label>
                <input type="password" placeholder="* * * * * * * * * *">
            </div>

            <div>
                <div id="infoInferiores">
                    <div id="iconsRedeSocial">
                        <button id="googleIcon"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 488 512" width="20px" fill="white"><!--!Font Awesome Free 6.6.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                                <path d="M488 261.8C488 403.3 391.1 504 248 504 110.8 504 0 393.2 0 256S110.8 8 248 8c66.8 0 123 24.5 166.3 64.9l-67.5 64.9C258.5 52.6 94.3 116.6 94.3 256c0 86.5 69.1 156.6 153.7 156.6 98.2 0 135-70.4 140.8-106.9H248v-85.3h236.1c2.3 12.7 3.9 24.9 3.9 41.4z" />
                            </svg></button>
                        <button id="faceboockIcon"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" width="15px" fill="white"><!--!Font Awesome Free 6.6.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                                <path d="M80 299.3V512H196V299.3h86.5l18-97.8H196V166.9c0-51.7 20.3-71.5 72.7-71.5c16.3 0 29.4 .4 37 1.2V7.9C291.4 4 256.4 0 236.2 0C129.3 0 80 50.5 80 159.4v42.1H14v97.8H80z" />
                            </svg></button>
                    </div>

                    <div id="esqueciSenha">
                        <p>Esqueci minha <span>senha</span></p>
                    </div>

                </div>
            </div>
        </form>


        <div id="btnEnviarLogin">
            <button>Entrar</button>
        </div>
    </div>
</main>
@endsection