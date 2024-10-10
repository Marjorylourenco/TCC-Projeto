<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"
    />
    <link
      rel="stylesheet"
      type="text/css"
      href="./css/products.css"
      media="screen"
    />
    <link
      rel="stylesheet"
      type="text/css"
      href="./css/reset.css"
      media="screen"
    />
    <title>Produtos</title>
  </head>
  <body class="wrapper">
    <header class="header">
      <img src="./assets/logo.webp" class="logo" alt="Logo" />
      <nav class="navigation">
        <a class="nav-link" href="home.html">Página inicial</a>
        <a class="nav-link" href="products.php">Produtos</a>
        <a class="nav-link" href="recipes.php">Receitas</a>
        <a class="nav-link" href="about-us.html">Sobre nós</a>
        <a class="nav-link" href="contact.html">Contato</a>
        <div class="search-box">
          <i class="nav-search fa-solid fa-magnifying-glass"></i>
          <input type="search" placeholder="Pesquisar..." class="search-input" />
        </div>
      </nav>
    </header>
    <main class="main-content">
      <h1 class="title">Produtos feitos para você!</h1>
      <?php
      include_once("conexao.php");
      $sql = "select * from produtos;";
      $resultado = mysqli_query($conn,$sql);
      if(mysqli_num_rows($resultado)>0){
        while($produto = mysqli_fetch_assoc($resultado)){

      

      echo '
      <!--Inicio card -->
      <div class="product-card">
        <div class="product-image-wrapper">
          <img src="./assets/'.$produto['FOTO'].'" class="product-image" />
        </div>
        <div class="product-detail">
          <h2 class="product-name">'.$produto['NOME'].'</h2>
          <p class="product-benefit">
           '.$produto['DESCRICAO'].'
          </p>
          <span class="product-price">R$ '.$produto['PRECO'].'</span>
          <div class="button-wrapper">
           

          </div>
        </div>
      </div>
      <!-- Fim do card -->
      ';

    }
  }else{
    echo "Nenhum produto cadastrado";
  }
      ?>
    </main>
    <footer class="footer">

    <script src="./scripts/script.js"></script>

    <div vw class="enabled">
      <div vw-access-button class="active"></div>
      <div vw-plugin-wrapper>
        <div class="vw-plugin-top-wrapper"></div>
      </div>
    </div>
    <script src="https://vlibras.gov.br/app/vlibras-plugin.js"></script>
    <script>
      new window.VLibras.Widget('https://vlibras.gov.br/app');
    </script>


  </body>
</html>
