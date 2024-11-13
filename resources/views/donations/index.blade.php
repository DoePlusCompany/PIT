<!DOCTYPE html>
<html>
<head>
    <title>Doações</title>
    <style>
        /* Reset básico para padronizar margens e preenchimentos */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        /* Estilo geral do body */
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
            color: #333;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            padding: 20px;
            min-height: 100vh;
        }

        /* Título principal */
        h1 {
            font-size: 2rem;
            margin-bottom: 20px;
            color: #444;
            text-align: center;
        }

        /* Container da grade */
        .grid-container {
            display: grid;
            gap: 20px;
            width: 100%;
            max-width: 1200px;
        }

        /* Estilo para o grid em diferentes tamanhos de tela */
        @media (min-width: 600px) {
            .grid-container {
                grid-template-columns: repeat(2, 1fr);
            }
        }

        @media (min-width: 900px) {
            .grid-container {
                grid-template-columns: repeat(3, 1fr);
            }
        }

        /* Estilo dos cards */
        .card {
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            padding: 20px;
            text-align: center;
            transition: transform 0.3s ease;
        }

        .card:hover {
            transform: translateY(-5px);
        }

        .card h3 {
            font-size: 1.5rem;
            margin-bottom: 10px;
            color: #2c3e50;
        }

        .card p {
            margin-bottom: 15px;
            line-height: 1.6;
        }

        /* Estilo da imagem */
        .card img {
            max-width: 100%;
            height: auto;
            border-radius: 8px;
            margin-top: 15px;
        }
    </style>
</head>
<body>
    <h1>Lista de Doações</h1>
    <div class="grid-container">
        @foreach($donations as $donation)
            <div class="card">
                <h3>{{ $donation->title }}</h3>
                <p>{{ $donation->description }}</p>
                <p>{{ $donation->donation_type }}</p>
                <a href="{{ route('doacao.show', $donation->id) }}">
                    <button>Ver mais</button>
                </a>
            </div>
        @endforeach
    </div>
</body>
</html>

