<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Produto</title>
    <style>
        body {
            background-color: #dfd4b8;
            display: flex;
            flex-direction: column; /* Alinha os itens verticalmente */
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            font-family: Arial, sans-serif;
        }
        .logo {
            margin-bottom: 20px; /* Espaçamento abaixo da imagem */
            max-width: 100%; /* Limita a largura da imagem */
            height: auto; /* Mantém a proporção da imagem */
        }
        h1 {
            text-align: center;
            margin-bottom: 20px;
            color: #b89710; /* Cor do título alterada */
        }
        form {
            background-color: white;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 400px; /* Aumenta a largura do formulário */
        }
        label {
            display: block;
            margin-bottom: 5px;
        }
        input[type="text"],
        textarea,
        input[type="file"] {
            width: 100%;
            padding: 8px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        input[type="submit"] {
            background-color: #6b8841;
            color: white;
            border: none;
            padding: 10px;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
            transition: background-color 0.3s;
            display: block; /* Faz o botão ser um bloco */
            width: 100%; /* Largura do botão igual ao formulário */
        }
        input[type="submit"]:hover {
            background-color: #5a6e34;
        }
        footer {
            margin-top: 20px;
            text-align: center;
            background-color: #6b8841; /* Cor do footer */
            color: white; /* Cor do texto no footer */
            padding: 10px 0; /* Espaçamento interno do footer */
            width: 50%; /* Largura total */
        }
    </style>
</head>
<body>
    <img src="./assets/logo.webp" class="logo" alt="Logo" />
    <div>
        <h1>Cadastro de Produto</h1>
        <form action="cadastrarprodutos.php" method="post" enctype="multipart/form-data">
            <label for="nome">Nome:</label>
            <input type="text" id="nome" name="nome" required>

            <label for="descricao">Descrição:</label>
            <textarea id="descricao" name="descricao" required></textarea>

            <label for="preco">Preço:</label>
            <input type="text" id="preco" name="preco" required>

            <label for="foto">Foto:</label>
            <input type="file" id="foto" name="foto" accept="image/*" required>

            <input type="submit" value="Cadastrar">
        </form>
    </div>
    <footer>
        <p>&copy; 2024 Grãos & Cia.</p>
    </footer>
</body>
</html>