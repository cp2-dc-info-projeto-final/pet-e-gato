<?php include "autentica.php" ?>


<!doctype html>
<html lang="pt-br">
  <head>
    <title>Serviços | Pet&Gatô</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="_img/logo_petgato.png" type="image/x-icon" />
    <link rel="stylesheet" href="_css/main.css"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" 
      integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700;900&display=swap" rel="stylesheet">
  </head>
  <body>

    <div id="header">
        <div class="container">
          <nav class="navbar navbar-expand-lg navbar-light justify-content-between">
              
              <a class="navbar-brand" href="#"></a>
              <a href="index-inicial.php"><img src="_img/logo_petgato.png" class="img-center" width="30%"/></a>
              
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
                    <a class="nav-link active" aria-current="page" href="index-inicial.php"> Início</a>
                  </li>

                  <li class="nav-item">
                    <a class="nav-link" href="servicos.php">Serviços</a>
                  </li>

                  <li class="nav-item">
                    <a class="nav-link" href="clientes.php">Clientes</a>
                  </li>

                  <li class="nav-item">
                    <a class="nav-link" href="funcionario.php">Funcionários</a>
                  </li>

                  <li class="nav-item">
                    <a class="nav-link" href="cadastro_funcionario.php">Cadastro de Funcionários</a>
                  </li>

                  <li class="nav-item">
                    <a class="nav-link" href="#">Contato</a>
                  </li>

                  <li class="nav-item">
                    <a class="nav-link" href="#">Sobre</a>
                  </li>

                  <li class="nav-item">
                    <a class="nav-link" href="logout.php">Fazer logout</a>
                  </li>
                </ul>
              </div>
          </nav>
        </div>
    </div>

    <div id="servicos" class="block">
      <div class="container">
        <h2 class="title text-center">Nossos serviços</h2>
        <h4 class="subtitle text-center mb-4">
          Tudo com muito amor para o seu pet 
        </h4>

        <div class="row">
          <div class="col-lg-3 col-md-6 mb-lg-0 mb-4">
            <a class="destaque">
              <div class="img-container mb-3">
                <img src="_img/banho.png" class="img-fluid" />
              </div>
              <h5 class="text-uppercase">Banho</h5>
              <p class="mb-0">
                Para deixar seu pet sempre cheiroso e bonito.
              </p>
              <p>R$50</p>
            </a>
          </div>

          <div class="col-lg-3 col-md-6 mb-lg-0 mb-4">
            <a class="destaque">
              <div class="img-container mb-3">
                <img src="_img/tosa.png" class="img-fluid" />
              </div>
              <h5 class="text-uppercase">Tosa</h5>
              <p class="mb-0">
                Para deixar seu pet sempre na régua.
              </p>
              <p>R$60</p>
            </a>
          </div>

          <div class="col-lg-3 col-md-6 mb-lg-0 mb-4">
            <a class="destaque">
              <div class="img-container mb-3">
                <img src="_img/bet.jpg" class="img-fluid" />
              </div>
              <h5 class="text-uppercase">Banho e Tosa</h5>
              <p class="mb-0">
                A 
                combinação para um pet cheiroso e bonitão.
              </p>
              <p>R$80</p>
            </a>
          </div>

          <div class="col-lg-3 col-md-6 mb-lg-0 mb-4">
            <a class="destaque">
              <div class="img-container mb-3">
                <img src="_img/unha.jpg" class="img-fluid" />
              </div>
              <h5 class="text-uppercase">Corte de Unha</h5>
              <p class="mb-0">
                Uma incrivel pedicure no seu pet.
              </p>
              <p>R$30</p>
            </a>
          </div>

          <div class="col-lg-3 col-md-6 mb-lg-0 mb-4">
            <a class="destaque">
              <div class="img-container mb-3">
                <img src="_img/higienica.jpg" class="img-fluid" />
              </div>
              <h5 class="text-uppercase">Higiênica</h5>
              <p class="mb-0">
                Um serviço de higiene completa para o seu pet.
              </p>
              <p>R$20</p>
            </a>
          </div>

          <div class="col-lg-3 col-md-6 mb-lg-0 mb-4">
            <a class="destaque">
              <div class="img-container mb-3">
                <img src="_img/banhohig.jpg.jpeg" class="img-fluid" />
              </div>
              <h5 class="text-uppercase">Banho com Higiênica</h5>
              <p class="mb-0">
                A combinação para um pet cheiroso e higienizado.
              </p>
              <p>R$60</p>
            </a>
          </div>

          <div class="col-lg-3 col-md-6 mb-lg-0 mb-4">
            <a class="destaque">
              <div class="img-container mb-3">
                <img src="_img/clubinho.jpeg" class="img-fluid" />
              </div>
              <h5 class="text-uppercase">Clubinho</h5>
              <p class="mb-0">
                Um pacote mensal para o seu pet com tudo que ele tem direito.
              </p>
              <p>R$180</p>
            </a>
          </div>

        </div>
      </div>
    </div>
  

</div>    
    
    <script src="js/bootstrap.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
  
  </body>
</html>