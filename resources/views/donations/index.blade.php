<!DOCTYPE html>
<html>
<head>
    <title>Doações</title>
</head>
<body>
    <h1>Lista de Doações</h1>
    @foreach($donations as $donation)
        <div class="card">
            <h3>{{ $donation->title }}</h3>
            <p>{{ $donation->description }}</p>
            <p>{{ $donation->donation_type}}</p>
            @if($donation->image)
                <img src="{{ asset('storage/' . $donation->image) }}" alt="Imagem da Doação">
            @endif
        </div>
    @endforeach
</body>
</html>
