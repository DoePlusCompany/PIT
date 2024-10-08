@extends('layouts.app')

@section('conteudo')
    <div id="background_options_donations">
        <div class="container">
            <section id="section-explorer">
                <div id="section-explorer-wrapper">
                    <div id="section-explorer-top">
                        <div>
                            <label for="">Filtrar por:</label>
                                <div id="section-explorer-top-left">
                                    <select name="estado" id="">
                                        <option value="">Por estado:</option>
                                        <option value="">teste</option>
                                        <option value="">teste</option>
                                        <option value="">teste</option>
                                    </select>
                                    <select name="categoria" id="">
                                        <option value="">Por categoria:</option>
                                        <option value="">teste</option>
                                        <option value="">teste</option>
                                        <option value="">teste</option>
                                    </select>
                            </div>
                        </div>
                        <div id="section-explorer-top-right">
                            <input type="text" placeholder="Buscar por causas">
                        </div>
                    </div>
                    <div id="section-explorer-bottom">
                        <div class="card">
                            <img src="assets/imgExplorer1.png" alt="">
                            <h2>
                                <strong>
                                    Arrecadando Comida
                                </strong>
                            </h2>
                            <div class="typeCard">
                                <p>
                                    Saúde - Tratamento
                                </p>
                                <p>
                                    Realizado pela ONG
                                </p>
                            </div>
                            <div class="line">

                            </div>
                            <div class="informations">
                                <p>
                                    Telefone - (31) 99700 - 2244
                                </p>
                                <p>
                                    Email: doepluscompany@gmail.com
                                </p>
                            </div>
                            <button id="btn-donations-1">
                                AJUDAR
                            </button>
                        </div>
                        <div class="card">
                            <img src="assets/imgExplorer2.png" alt="">
                            <h2>
                                <strong>
                                    Arrecadando Roupas
                                </strong>
                            </h2>
                            <div class="typeCard">
                                <p>
                                    Saúde - Tratamento
                                </p>
                                <p>
                                    Realizado pela ONG
                                </p>
                            </div>
                            <div class="line">

                            </div>
                            <div class="informations">
                                <p>
                                    Telefone - (31) 99700 - 2244
                                </p>
                                <p>
                                    Email: doepluscompany@gmail.com
                                </p>
                            </div>
                            <button id="btn-donations-2">
                                AJUDAR
                            </button>
                        </div>
                        <div class="card">
                            <img src="assets/imgExplorer3.png" alt="">
                            <h2>
                                <strong>
                                    Arrecadando Dinheiro
                                </strong>
                            </h2>
                            <div class="typeCard">
                                <p>
                                    Saúde e Tratamento
                                </p>
                                <p>
                                    Realizado pela ONG
                                </p>
                            </div>
                            <div class="line">

                            </div>
                            <div class="informations">
                                <p>
                                    Telefone - (31) 99700 - 2244
                                </p>
                                <p>
                                    Email: doepluscompany@gmail.com
                                </p>
                            </div>
                            <button id="btn-donations-3">
                                AJUDAR
                            </button>
                        </div>
                    </div>
                </div>
            </section>
        </div>
@endsection