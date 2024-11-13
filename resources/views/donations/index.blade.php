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
            font-family: 'Arial', sans-serif;
            background-color: #f5f5f5;
            color: #333;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            padding: 40px 20px;
            min-height: 100vh;
        }

        /* Título principal */
        h1 {
            font-size: 2.5rem;
            margin-bottom: 30px;
            color: #2c3e50;
            text-align: center;
            font-weight: bold;
        }

        /* Formulário de filtro */
        form {
            display: flex;
            justify-content: center;
            margin-bottom: 40px;
            width: 100%;
            max-width: 500px;
        }

        form label {
            font-size: 1rem;
            margin-right: 10px;
            align-self: center;
        }

        form select {
            padding: 8px;
            font-size: 1rem;
            border: 2px solid #ccc;
            border-radius: 5px;
            outline: none;
            margin-right: 10px;
            transition: border-color 0.3s ease;
        }

        form select:focus {
            border-color: #3498db;
        }

        form button {
            padding: 10px 20px;
            font-size: 1rem;
            background-color: #3498db;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        form button:hover {
            background-color: #2980b9;
        }

        /* Container da grade */
        .grid-container {
            display: grid;
            gap: 20px;
            width: 100%;
            max-width: 1200px;
            grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
        }

        /* Estilo dos cards */
        .card {
            background-color: #fff;
            border-radius: 12px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
            padding: 20px;
            text-align: center;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            overflow: hidden;
        }

        .card:hover {
            transform: translateY(-8px);
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.15);
        }

        .card h3 {
            font-size: 1.75rem;
            margin-bottom: 15px;
            color: #2c3e50;
            font-weight: bold;
        }

        .card p {
            font-size: 1rem;
            margin-bottom: 10px;
            line-height: 1.6;
            color: #555;
        }

        .card button {
            padding: 8px 15px;
            background-color: #3498db;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .card button:hover {
            background-color: #2980b9;
        }

        /* Estilo da imagem (se você for adicionar uma imagem no card) */
        .card img {
            max-width: 100%;
            height: auto;
            border-radius: 8px;
            margin-top: 15px;
        }

        /* Responsividade */
        @media (max-width: 600px) {
            h1 {
                font-size: 2rem;
            }

            .grid-container {
                grid-template-columns: 1fr;
            }

            form {
                flex-direction: column;
                align-items: center;
            }

            form button {
                width: 100%;
            }
        }

    </style>
</head>
<body>
    <h1>Lista de Doações</h1>

    <!-- Formulário de filtro -->
    <form method="GET" action="{{ route('donations.index') }}">
        <label for="donation_type">Filtrar por Tipo de Doação:</label>
        <select name="donation_type" id="donation_type">
            <option value="">Selecione</option>
            <!-- Aqui você pode preencher os tipos de doações dinamicamente, se necessário -->
            <option value="Alimento">Alimento</option>
            <option value="Roupas">Roupas</option>
            <option value="Dinheiro">Dinheiro</option>
            <!-- Adicione outros tipos conforme sua necessidade -->
        </select>
        <button type="submit">Filtrar</button>
    </form>

    <!-- Grid de doações -->
    <div class="grid-container">
        @foreach($donations as $donation)
            <div class="card">
                <h3>{{ $donation->title }}</h3>
                <p>{{ $donation->description }}</p>
                <p><strong>Tipo:</strong> {{ $donation->donation_type }}</p>
                <p><strong>Nome da ONG:</strong> {{ $donation->name_ong }}</p>
                <p><strong>Chave Pix:</strong> {{ $donation->chave_pix }}</p>
                <a href="{{ route('doacao.show', $donation->id) }}">
                    <button>Ver mais</button>
                </a>
            </div>
        @endforeach
    </div>
</body>
</html>
