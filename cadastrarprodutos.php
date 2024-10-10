<?php
include 'conexao.php'; // Incluir arquivo de conexão

// Obter dados do formulário
$nome = $_POST['nome'];
$descricao = $_POST['descricao'];
$preco = $_POST['preco'];

// Lidar com upload da foto
$foto = $_FILES['foto']['name'];
$target_dir = "assets/";
$target_file = $target_dir . basename($foto);

// Criar diretório se não existir
if (!is_dir($target_dir)) {
    mkdir($target_dir, 0755, true);
}

// Mover o arquivo enviado para o diretório
if (move_uploaded_file($_FILES['foto']['tmp_name'], $target_file)) {
    // Inserir dados na tabela
    $sql = "INSERT INTO PRODUTOS (NOME, DESCRICAO, PRECO, FOTO) VALUES ('$nome', '$descricao', '$preco', '$target_file')";

    if (mysqli_query($conn, $sql)) {
        echo "Cadastro realizado com sucesso!";
    } else {
        echo "Erro: " . mysqli_error($conn);
    }
} else {
    echo "Erro ao enviar o arquivo.";
}

// Fechar conexão
mysqli_close($conn);
?>
