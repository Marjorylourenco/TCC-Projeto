<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Receita</title>
    <style>
        body {
            background-color: #dfd4b8;
            display: flex;
            flex-direction: column; /* Mudança para coluna */
            justify-content: center;
            align-items: center;
            min-height: 100vh; /* Garante que o corpo ocupe pelo menos a altura da janela */
            margin: 0;
            font-family: Arial, sans-serif;
        }
        h1 {
            text-align: center;
            margin-bottom: 20px;
            color: #b89710;
        }
        form {
            display: flex;
            flex-direction: column;
            align-items: center;
            background-color: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 500px;
        }
        label {
            margin-top: 10px;
            text-align: left;
            width: 100%;
        }
        input[type="text"],
        textarea,
        input[type="file"] {
            width: 100%;
            padding: 10px;
            margin-top: 5px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        textarea {
            resize: none;
            height: 100px;
        }
        input[type="submit"] {
            background-color: #6b8841;
            color: white;
            border: none;
            padding: 15px;
            border-radius: 5px;
            cursor: pointer;
            margin-top: 15px;
            width: 100%;
            transition: background-color 0.3s;
            font-size: 16px;
        }
        input[type="submit"]:hover {
            background-color: #5a6f34;
        }
        footer {
            margin-top:20px; /* Faz o footer ficar na parte inferior */
            text-align: center;
            background-color: #6b8841;
            color: white;
            padding: 10px 0;
            width: 50%; /* Largura total do footer */
        }

       
    </style>
</head>
<body>
<img src="./assets/logo.webp" class="logo" alt="Logo" />
    <div>
        <h1>Cadastro de Receita</h1>
        <form>
            <label for="nome_receita">Nome da Receita:</label>
            <input type="text" id="nome_receita" name="nome_receita" required>

            <label for="ingredientes">Ingredientes:</label>
            <textarea id="ingredientes" name="ingredientes" required></textarea>

            <label for="preparo">Preparo:</label>
            <textarea id="preparo" name="preparo" required></textarea>

            <label for="foto">Foto:</label>
            <input type="file" id="foto" name="foto" accept="image/*" required>

            <label for="codigo_produto">Código do Produto:</label>
            <input type="text" id="codigo_produto" name="codigo_produto" required>

            <input type="submit" value="Cadastrar">
        </form>
    </div>

    <footer>
        <p>&copy; 2024 Grãos & Cia.</p>
    </footer>
</body>
</html>
