<!-- resources/views/emails/solicitacao.blade.php -->

<!DOCTYPE html>
<html>
<head>
    <title>Nova Solicitação de Atendimento</title>
</head>
<body>
    <h1>Nova Solicitação de Atendimento Recebida</h1>
    <p><strong>Nome do Cliente:</strong> {{ $solicitacao->nome_cliente }}</p>
    <p><strong>E-mail do Cliente:</strong> {{ $solicitacao->email_cliente }}</p>
    <p><strong>Mensagem:</strong></p>
    <p>{{ $solicitacao->mensagem }}</p>
</body>
</html>
