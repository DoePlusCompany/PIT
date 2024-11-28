<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Perfil</title>
    <style>
        /* Reset básico */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, sans-serif;
        }

        body {
            background-color: #f4f7fc;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            padding: 20px;
        }

        .form-container {
            background: #fff;
            border-radius: 12px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 600px;
            padding: 40px;
            text-align: center;
        }

        h1 {
            font-size: 2em;
            margin-bottom: 20px;
            color: #333;
        }

        label {
            font-size: 1.1em;
            color: #555;
            margin-bottom: 8px;
            text-align: left;
            display: block;
            margin-top: 15px;
        }

        input,
        textarea {
            width: 100%;
            padding: 12px;
            margin-top: 8px;
            border: 1px solid #ddd;
            border-radius: 8px;
            font-size: 1em;
            transition: border-color 0.3s ease;
        }

        input:focus,
        textarea:focus {
            border-color: #4caf50;
            outline: none;
        }

        textarea {
            resize: vertical;
            min-height: 150px;
        }

        button {
            width: 100%;
            padding: 15px;
            margin-top: 25px;
            background-color: #4caf50;
            color: white;
            font-size: 1.2em;
            border: none;
            border-radius: 8px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        button:hover {
            background-color: #45a049;
        }

        /* Responsividade */
        @media (max-width: 768px) {
            .form-container {
                padding: 20px;
            }

            h1 {
                font-size: 1.6em;
            }

            button {
                font-size: 1em;
            }
        }
    </style>
</head>

<body>
    <div class="form-container">
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
    </div>
</body>

</html>
