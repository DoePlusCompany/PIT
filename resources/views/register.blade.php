@extends('layouts.app')

@section('conteudo')
<div id="background-register">
    <main id="container-register">
        <div id="wrapper-register">
            <section id="left-register">
                <img src="assets/registerImgs/img-register.png" alt="">
            </section>
            <section id="right-register">
                <h2>Criar Conta</h2>
                <form action="">
                    <input type="text" placeholder="Name">
                    <input type="text" placeholder="Email">
                    <input type="text" placeholder="Password">
                </form>
                <div id="itens-register">
                    <div>
                        <img src="assets/registerImgs/googleAzul.png" alt="">
                        <img src="assets/registerImgs/facebookAzul.png" alt="">
                    </div>
                    <p>
                        concordar com termos de uso
                    </p>
                </div>
                <button>Cadastrar</button>
            </section>
        </div>
    </main>
</div>
@endsection