@extends('layouts.app')

@section('conteudo')
@if($errors->any())
    @foreach($errors->all() as $e)
        <p>{{ $e }}</p>
    @endforeach
@endif
<div id="background-register">
    <form action="{{ route('register') }}" method="post">
        <main id="container-register">
            <div id="wrapper-register">
                <section id="left-register">
                    <img src="assets/registerImgs/img-register.png" alt="">
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
                        <option value="admin">Admin</option>
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
</div>
@endsection
