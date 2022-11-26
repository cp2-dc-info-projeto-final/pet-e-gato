<html>
  <head>
    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="_img/logo_petgato.png" type="image/x-icon" />
    <link rel="stylesheet" href="_css/main.css"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"></script>
    <title>Cadastre-se - Pet&Gatô</title>
    
  </head>
    
  <body>


    <div id="header">
        <div class="container">
          <nav class="navbar navbar-expand-lg navbar-light justify-content-between">
              <a class="navbar-brand" href="#"></a>
              <a href='index.php'><img src="_img/logo_petgato.png" class="img-center" width="10%"/></a>
              <button 
                class="navbar-toggler" 
                type="button" 
                data-bs-toggle="collapse" 
                data-bs-target="#navbarNav" 
                aria-controls="navbarNav" 
                aria-expanded="false" 
                aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="index.php"> Início</a>
                  </li>

                  <li class="nav-item">
                    <a class="nav-link" href="#">Serviços</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">Portfólio</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">Contato</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">Sobre</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="cadastro_cliente.html">Cadastre-se</a>
                  </li>
                  </ul>
              </div>
          </nav>
        </div>
    </div>

<?php
    
  $operacao = $_POST["operacao"];

    if ($operacao == "cliente"){

    $servico = $_POST["servico"];
    $descricao = $_POST["descricao"]; 
    $preco = $_POST["preco"];


    $sql = "INSERT INTO servicos (servico, descricao, preco) VALUES ('$servico','$descricao','$preco');";  
    $mysqli = mysqli_connect("localhost","administrador","2122","pet_e_gato");
    

    
    if(!mysqli_query($mysqli,$sql)){
      echo mysqli_error($mysqli);
      }

    header ('location: index-adm.php');


  }

?>

  </body>
</html>