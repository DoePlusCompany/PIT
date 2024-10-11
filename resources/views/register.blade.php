@extends('layouts.app')

@section('conteudo')
@if($errors->any())
    @foreach($errors->all() as $e)
        <p>{{ $e }}</p>
    @endforeach
@endif
<!-- <div id="background-register">
    <form action="{{ route('register') }}" method="post">
        <main id="container-register">
            <div id="wrapper-register">
                <section id="left-register">
                    <img src="assets/registerImgs/registerImg.png" alt="">
                </section>
                <section id="right-register">
                    <h2>Criar Conta</h2>
                    @csrf
                    <input type="text" name="name" placeholder="Name" value="{{ old('name') }}">
                    <input type="email" name="email" placeholder="Email" value="{{ old('email') }}">
                    <input type="password" name="password" placeholder="Password">
                    <input type="password" name="password_confirmation" placeholder="Confirm Password">
                    <select name="role" require>
                        <option value=""></option>
                        <option value="admin">Admin</option>ss
                        <option value="admin">Admin</option>ss
                        <option value="comum">Comum</option>
                    </select>
                    <div id="itens-register">
                        <div>
                            <img src="assets/registerImgs/googleAzul.png" alt="">
                            <img src="assets/registerImgs/facebookAzul.png" alt="">
                        </div>
                        <p>
                            Concordar com termos de uso
                        </p>
                    </div>
                    <button type="submit">Cadastrar</button>
                </section>
            </div>
        </main>
    </form>
</div> -->

<div id="background-register">
        <form action="{{ route('register') }}" method="post">
            <main id="container-register">
                
                <div id="wrapper-register">
                    
                    <section id="left-register">
                        <img src="/assets/registerImgs/registerImg.png" alt="">
                    </section>
                    
                    @csrf
                    <section id="right-register">
                        <h2>CRIAR CONTA</h2>

                        <div id="master-inputs">
                            <div class="inputs-group-resiter">
                                <p>Nome:</p>
                                <input type="text" name="name" placeholder="Seu nome aqui" value="{{ old('name') }}">
                            </div>
                            
                            <div class="inputs-group-resiter">
                                <p>Email:</p>
                                <input type="email" name="email" placeholder="Usuario@gmail.com" value="{{ old('email') }}">
                            </div>
    
                            <div class="inputs-group-resiter">
                                <p>Senha:</p>
                                <input type="password" name="password" placeholder="* * * * * * * * *">
                            </div>
    
                            <div class="inputs-group-resiter">
                                <p>Confirmar senha:</p>
                                <input type="password" name="password_confirmation" placeholder="* * * * * * * * *">
                            </div>

                        </div>
                        
                        
                        <div id="itens-register">
                            <p>
                                <span>Selecione seu</span> tipo de cadastro
                            </p>
                            <div>
                                <select name="role" required id="type-select" >
                                    <option value=""></option>
                                    <option value="usuario">Usuário</option>
                                    <option value="org">Organização</option>
                                </select>
                            </div>
                            
                            
                        </div>
                        <button type="submit">CRIAR</button>
                    </section>
                </div>
            </div>
            </main>
        </form>

        <footer>
        <div id="logo-div"> 
            <img src="/assets/registerImgs/logo-register.png" alt="">
        </div>
    </footer>
@endsection
