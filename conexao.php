<?php
$servername = "localhost"; // O nome do servidor, geralmente "localhost"
$username = "root"; // Seu nome de usuário do banco de dados
$password = ""; // Sua senha do banco de dados
$dbname = "loja"; // O nome do banco de dados

// Criar conexão
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Verificar conexão
if (!$conn) {
    die("Conexão falhou: " . mysqli_connect_error());
}

// Definir o charset para evitar problemas com caracteres especiais
mysqli_set_charset($conn, "utf8");

// Agora você pode usar a variável $conn para executar consultas no banco de dados
?>