<!DOCTYPE html>
<html>
<head>
    <title>Perfil do Usuário</title>
</head>
<body>
<h1>Perfil de {{ $user->name }}</h1>
<p>Email: {{ $user->email }}</p>
<p>Endereço: {{ $user->address }}</p>
<p>Telefone: {{ $user->phone }}</p>
<p>Bio: {{ $user->bio }}</p>

<a href="{{ route('profile.edit') }}">Editar Perfil</a>
    <!-- Formulário de logout -->
    <form action="{{ route('logout') }}" method="POST">
        @csrf
        <button type="submit">Deslogar</button>
    </form>
</body>
</html>
