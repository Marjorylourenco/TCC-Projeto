<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Principal</title>
    <style>
        body {
            background-color: #dfd4b8;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            margin: 0;
            font-family: Arial, sans-serif;
        }
        h1 {
            text-align: center;
            margin-bottom: 20px;
            color: #b89710;
        }
        .form-container {
            background-color: white; /* Fundo branco */
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            text-align: center; /* Centraliza o texto dentro do formulário */
        }
        .button-container {
            display: flex;
            flex-direction: column;
            align-items: center;
        }
        button {
            background-color: #6b8841;
            color: white;
            border: none;
            padding: 15px 20px;
            border-radius: 5px;
            cursor: pointer;
            margin: 10px 0;
            transition: background-color 0.3s;
            font-size: 16px;
        }
        button:hover {
            background-color: #5a6f34;
        }
        footer {
            margin-top: 20px;
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
    <h1>Página Inicial</h1>

    <div class="form-container">
        <div class="button-container">
            <a href="cadastro.php"><button type="button">Cadastro de Receitas</button></a>
            <a href="cadprodutos.php"><button type="button">Cadastro de Produtos</button></a>
        </div>
    </div>

    <footer>
        <p>&copy; 2024 Grãos & Cia.</p>
    </footer>
</body>
</html>
