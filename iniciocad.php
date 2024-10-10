<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicial cadastro</title>
</head>
<body>

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
       
       
    </style>
</head>
<body>
<img src="./assets/logo.webp" class="logo" alt="Logo" />
    <div>
        <h1>Faça seu login</h1>
        <form method="post" action="iniciocad.php">
            <label for="nome_receita">Login:</label>
            <input type="text" id="login" name="login" required>

            <label for="codigo_produto">Senha:</label>
            <input type="text" id="senha" name="senha" required>

            <input type="submit" value="Entrar">
        </form>
    </div>

    <?php
if (isset($_POST['login']) && isset($_POST['senha'])) {
    if ($_POST['login'] == "admin" && $_POST['senha'] == "admin") {
        session_start();
        header("location:principal.php");
        exit(); // Adiciona exit após o redirecionamento
    } else {
        echo '<script>alert("acesso restrito!");</script>';
    }
}
?>


   
</body>
</html>





    
