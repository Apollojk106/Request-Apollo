<!DOCTYPE html>
<html lang="pt-PT">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário</title>
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            background-color: #f0f0f0;
        }
        .form-container {
            background-color: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }
        input, select {
            width: 100%;
            margin: 10px 0;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        button {
            padding: 10px;
            background-color: #007bff;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        button:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

<div class="form-container">
    <form action="/request" method="POST">
        @csrf
        <label for="nome">Nome:</label>
        <input type="text" id="nome" name="nome" required>

        <label for="sobrenome">SobreNome:</label>
        <input type="text" id="sobrenome" name="sobrenome" required>

        <label for="cep">CEP:</label>
        <input type="text" id="cep" name="cep" required>

        <label for="idade">Idade:</label>
        <input type="number" id="idade" name="idade" required>

        <label for="data">Data de Nascimento:</label>
        <input type="date" id="data" name="data" value="2018-07-22" min="2018-01-01" max="2018-12-31" />

        <label for="altura">Altura:</label>
        <input type="number" id="altura" name="altura" step="0.01" required>

        <label for="genero">Género:</label>
        <select id="genero" name="genero" required>
            <option value="masculino">Masculino</option>
            <option value="feminino">Feminino</option>
            <option value="outro">Outro</option>
        </select>

        <button type="submit">Enviar</button>
    </form>
</div>

</body>
</html>
