@extends('layouts.app')

@section('conteudo')
<div class="container">
    <header id="home-header">
        <nav id="home-header-left">
            <h2>Doa+</h2>
            <ul id="home-header-items">
                <li>
                    <a href="">
                        Inicio
                    </a>
                </li>
                <li>
                    <a href="">
                        Explorar
                    </a>
                </li>
                <li>
                    <a href="/blog">
                        Blog
                    </a>
                </li>
                <li>
                    <a href="/contact">
                        Contact
                    </a>
                </li>
            </ul>
        </nav>
        <button>
            Contribua
        </button>
    </header>

</div>
<section id="OurInformation">
    <div class="container">
        <div id="OurInformation-wrapper">
            <div id="OurInformation-wrapper-left">
                <h2>Our Information</h2>
                <div id="OurInformation-wrapper-left-itens">
                    <div>
                        <h4>
                            Email & Website
                        </h4>
                        <div class="OurInformation-itens">
                            <p>
                                support@donority.com
                            </p>
                            <p>
                                www.donorityuk.com
                            </p>
                        </div>
                    </div>
                    <div>
                        <h4>
                            Phone
                        </h4>
                        <div class="OurInformation-itens">
                            <p>
                                555-666
                            </p>
                            <p>
                                777-888
                            </p>
                        </div>
                    </div>
                    <div>
                        <h4>
                            Adreess
                        </h4>
                        <div class="OurInformation-itens">
                            <p>
                                Donority Building, 4215
                            </p>
                            <p>
                                Grove Avenue,San Francisco, US
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div id="OurInformation-wrapper-right">
                .
            </div>
        </div>
    </div>
</section>
@endsection