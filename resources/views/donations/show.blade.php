<!DOCTYPE html>
<html>
<head>
    <title>Detalhes da Doação</title>
</head>
<body>
    <h1>{{ $donation->title }}</h1>
    <p><strong>Tipo de Doação:</strong> {{ $donation->donation_type }}</p>
    <p><strong>Descrição:</strong> {{ $donation->description }}</p>
    <p><strong>Nome da Ong:</strong> {{ $donation->name_ong }}</p>
    <p><strong>Chave pix:</strong> {{ $donation->chave_pix }}</p>
    <a href="{{ url()->previous() }}">Voltar para a lista</a>
</body>
</html>
