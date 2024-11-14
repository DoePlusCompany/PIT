@extends('layouts.app')

@section('conteudo')
<!-- resources/views/contact.blade.php -->
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contato</title>
    <style>
        /* Estilos do Accordion */
        .accordion-item {
            border-bottom: 1px solid #ddd;
            padding: 10px 0;
        }
        .accordion-title {
            cursor: pointer;
            font-weight: bold;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        .accordion-content {
            max-height: 0;
            overflow: hidden;
            transition: max-height 0.3s ease;
            padding: 0 15px;
        }
        .accordion-content.open {
            max-height: 200px; /* Ajuste conforme necessário */
        }
        .arrow {
            transition: transform 0.3s ease;
        }
        .arrow.open {
            transform: rotate(90deg);
        }

    </style>
</head>
<body>
 

<div id="accordion-section">

    
    <h2>Dúvidas frequentes</h2>
    
    <!-- Conteúdo da Página de Contato -->
    <p>Aqui você pode encontrar algumas dúvidas comuns</p>
    
<!-- Accordion de Perguntas Frequentes -->
<h3>Perguntas Frequentes</h3>
<div class="accordion">
    @foreach($faqs as $faq)
    <div class="accordion-item">
        <div class="accordion-title" onclick="toggleAccordion(this)">
            {{ $faq['question'] }}
            <span class="arrow">▶</span>
        </div>
        <div class="accordion-content">
            <p>{{ $faq['answer'] }}</p>
        </div>
    </div>
    @endforeach
</div>
</div>

<script>
    function toggleAccordion(element) {
        const content = element.nextElementSibling;
        const arrow = element.querySelector('.arrow');
        
        if (content.classList.contains('open')) {
            content.classList.remove('open');
            arrow.classList.remove('open');
        } else {
            content.classList.add('open');
            arrow.classList.add('open');
        }
    }
</script>

</body>
</html>

@endsection