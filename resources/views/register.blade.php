@extends('layouts.app')

@section('conteudo')
<div id="background-register">
    <form action="/users/register" method="post">
        <main id="container-register">
        <div id="wrapper-register">
            <section id="left-register">
                <img src="assets/registerImgs/img-register.png" alt="">
            </section>
            <section id="right-register">
                <h2>Criar Conta</h2>
                    @csrf
                    <input type="text" name="name" placeholder="Name"> 
                    <input type="email" name="email" placeholder="Email"> 
                    <input type="password" name="password" placeholder="Password"> 
                    <div id="itens-register">
                        <div>
                            <img src="assets/registerImgs/googleAzul.png" alt="">
                            <img src="assets/registerImgs/facebookAzul.png" alt="">
                        </div>
                        <p>
                            concordar com termos de uso
                        </p>
                    </div>
                    <button type="submit">Cadastrar</button>
                </section>
            </div>
        </main>
    </form>
</div>
@endsection