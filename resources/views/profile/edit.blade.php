<!DOCTYPE html>
<html>
<head>
    <title>Editar Perfil</title>
</head>
<body>
<h1>Editar Perfil</h1>
<form action="{{ route('profile.update') }}" method="POST">
    @csrf

    <label for="name">Nome:</label>
    <input type="text" name="name" value="{{ $user->name }}" required>

    <label for="email">Email:</label>
    <input type="email" name="email" value="{{ $user->email }}" required>

    <label for="address">Endereço:</label>
    <input type="text" name="address" value="{{ $user->address }}">

    <label for="phone">Telefone:</label>
    <input type="text" name="phone" value="{{ $user->phone }}">

    <label for="bio">Bio:</label>
    <textarea name="bio">{{ $user->bio }}</textarea>

    <button type="submit">Salvar</button>
</form>

</body>
</html>
