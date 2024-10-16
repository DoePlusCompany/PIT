<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Enviar Solicitação - SAC</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        /* Estilo global da página */
        body {
            background-color: #f0f4f8;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        /* Container principal */
        .container {
            margin-top: 60px;
            max-width: 600px;
            background-color: #fff;
            padding: 40px;
            border-radius: 15px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
        }

        /* Cabeçalho do formulário */
        h2 {
            font-size: 28px;
            font-weight: 600;
            color: #333;
            text-align: center;
            margin-bottom: 20px;
        }

        /* Parágrafo introdutório */
        p {
            text-align: center;
            color: #666;
            margin-bottom: 30px;
            font-size: 16px;
        }

        /* Estilo dos campos do formulário */
        .form-control {
            border-radius: 8px;
            padding: 10px;
            font-size: 16px;
            border: 1px solid #ccc;
        }

        .form-control:focus {
            border-color: #007bff;
            box-shadow: 0 0 8px rgba(0, 123, 255, 0.2);
        }

        /* Botão de envio */
        .btn-primary {
            background-color: #007bff;
            border: none;
            padding: 12px 20px;
            font-size: 16px;
            border-radius: 8px;
            transition: background-color 0.3s ease-in-out;
            width: 100%;
        }

        .btn-primary:hover {
            background-color: #0056b3;
        }

        /* Alerta de sucesso e erro */
        .alert {
            margin-top: 20px;
            border-radius: 8px;
        }

        /* Estilo do footer do formulário */
        footer {
            text-align: center;
            margin-top: 40px;
            font-size: 14px;
            color: #999;
        }
    </style>
</head>
<body>

    <div class="container">
        <h2>Enviar Solicitação - SAC</h2>
        <p>Entre em contato conosco preenchendo o formulário abaixo. Responderemos o mais breve possível.</p>

        <!-- Mensagem de sucesso -->
        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <!-- Exibir erros de validação -->
        @if($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <!-- Formulário para enviar solicitação -->
        <form action="{{ route('sac.store') }}" method="POST">
            @csrf  <!-- Proteção CSRF -->
            
            <!-- Nome do Cliente -->
            <div class="form-group">
                <label for="nome_cliente">Nome</label>
                <input type="text" class="form-control" id="nome_cliente" name="nome_cliente" value="{{ old('nome_cliente') }}" placeholder="Digite seu nome completo" required>
            </div>

            <!-- E-mail do Cliente -->
            <div class="form-group">
                <label for="email_cliente">E-mail</label>
                <input type="email" class="form-control" id="email_cliente" name="email_cliente" value="{{ old('email_cliente') }}" placeholder="Seu e-mail para contato" required>
            </div>

            <!-- Mensagem do Cliente -->
            <div class="form-group">
                <label for="mensagem">Mensagem</label>
                <textarea class="form-control" id="mensagem" name="mensagem" rows="5" placeholder="Digite sua mensagem" required>{{ old('mensagem') }}</textarea>
            </div>

            <!-- Botão de envio -->
            <button type="submit" class="btn btn-primary">Enviar Solicitação</button>
        </form>
    </div>


</body>
</html>
