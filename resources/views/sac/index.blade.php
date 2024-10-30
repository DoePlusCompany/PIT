<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Solicitações - SAC</title>
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
            background-color: #fff;
            padding: 40px;
            border-radius: 15px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
        }

        /* Título da tabela */
        h1 {
            font-size: 28px;
            font-weight: 600;
            color: #333;
            text-align: center;
            margin-bottom: 20px;
        }

        /* Estilo da tabela */
        table {
            width: 100%;
            margin-top: 20px;
        }

        th {
            background-color: #007bff;
            color: white;
            padding: 12px;
            border-radius: 8px;
        }

        td {
            padding: 12px;
            border: 1px solid #ddd;
        }

        /* Rodapé */
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
    <h1>Lista de Solicitações</h1>

    @if(session('success'))
        <div class="alert alert-success" id="success-message">
            {{ session('success') }}
        </div>
    @endif

    @if(session('error'))
        <div class="alert alert-danger" id="error-message">
            {{ session('error') }}
        </div>
    @endif

    <table class="table table-striped">
        <thead>
            <tr>
                <th>Nome</th>
                <th>E-mail</th>
                <th>Mensagem</th>
                <th>Status</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach($solicitacoes as $solicitacao)
            <tr>
                <td>{{ $solicitacao->nome_cliente }}</td>
                <td>{{ $solicitacao->email_cliente }}</td>
                <td>{{ $solicitacao->mensagem }}</td>
                <td>{{ $solicitacao->status }}</td>
                <td>
                    <form action="{{ route('sac.update', $solicitacao->id) }}" method="POST" style="display:inline;">
                        @csrf
                        <select name="status" required>
                            <option value="">Selecione o status</option>
                            <option value="Em andamento">Em andamento</option>
                            <option value="Concluída">Concluída</option>
                            <option value="Cancelada">Cancelada</option>
                        </select>
                        <button type="submit" class="btn btn-primary">Atualizar</button>
                    </form>

                    <form action="{{ route('sac.destroy', $solicitacao->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger" onclick="return confirm('Tem certeza que deseja excluir esta solicitação? Apenas solicitações com status "Concluída" ou "Cancelada" podem ser excluídas.');">Excluir</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

<script>
    // Função para ocultar mensagens após 5 segundos
    window.onload = function() {
        setTimeout(function() {
            const successMessage = document.getElementById('success-message');
            const errorMessage = document.getElementById('error-message');

            if (successMessage) {
                successMessage.style.display = 'none';
            }

            if (errorMessage) {
                errorMessage.style.display = 'none';
            }
        }, 3000); // 3000 milissegundos = 3 segundos
    };
</script>



</body>
</html>

