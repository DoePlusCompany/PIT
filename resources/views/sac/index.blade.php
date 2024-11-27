@extends('layouts.app')

<body>

<div class="container-sac">
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
                <td>
                    <span class="badge 
                        {{ $solicitacao->status == 'Em andamento' ? 'badge-warning' : 
                           ($solicitacao->status == 'Concluída' ? 'badge-success' : 'badge-secondary') }}">
                        {{ $solicitacao->status }}
                    </span>
                </td>
                <td>
                    <form action="{{ route('sac.update', $solicitacao->id) }}" method="POST" style="display:inline;">
                        @csrf
                        <select name="status" class="form-control mb-2" required>
                            <option value="">Selecione o status</option>
                            <option value="Em andamento">Em andamento</option>
                            <option value="Concluída">Concluída</option>
                            <option value="Cancelada">Cancelada</option>
                        </select>
                        <button type="submit" class="btn btn-primary-sac">Atualizar</button>
                    </form>

                    <form action="{{ route('sac.destroy', $solicitacao->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger" onclick="return confirm('Tem certeza que deseja excluir esta solicitação? Apenas solicitações com status "Concluída" ou "Cancelada" podem ser excluídas.');">
                            Excluir
                        </button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

<script>
    // Função para ocultar mensagens após 3 segundos
    window.onload = function() {
        setTimeout(function() {
            const successMessage = document.getElementById('success-message');
            const errorMessage = document.getElementById('error-message');

            if (successMessage) successMessage.style.display = 'none';
            if (errorMessage) errorMessage.style.display = 'none';
        }, 3000); // 3000 milissegundos = 3 segundos
    };
</script>

</body>
</html>
