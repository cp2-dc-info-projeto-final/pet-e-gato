<?php include "autentica.php" ?>


<!doctype html>
<html lang="pt-br">
  <head>
    <title>Serviços | Pet&Gatô</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="_img/logo_petgato.png" type="image/x-icon" />
    <link rel="stylesheet" href="_css/main.css"/>
    <link rel="stylesheet" href="_css/card.css"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" 
      integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700;900&display=swap" rel="stylesheet">
  </head>
  <body class="fadeIn">

    <div id="header">
        <div class="container">
          <nav class="navbar navbar-expand-lg navbar-light justify-content-between">
              
              <a class="navbar-brand" href="#"></a>
              <a href="index.php"><img src="_img/logo_petgato.png" class="img-center" width="20%"/></a>
              
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
                    <a class="nav-link" href="servicos_cliente.php">Serviços</a>
                  </li>

                  <li class="nav-item">
                    <a class="nav-link" href="seleciona_servico.php">Agendamento</a>
                  </li>

                  <li class="nav-item">
                    <a class="nav-link" href="calendario_cliente.php">Calendário</a>
                  </li>

                  <li class="nav-item">
                    <a class="nav-link" href="contato-cliente.php">Contato</a>
                  </li>

                  <li class="nav-item">
                    <a class="nav-link" href="#rodape">Sobre</a>
                  </li>

                  <li class="nav-item">
                    <a class="nav-link" href="perfil_cliente.php">Perfil</a>
                  </li>

                  <li class="nav-item">
                    <a class="nav-link" href="logout.php"> Sair </a>

                </ul>
              </div>
          </nav>
        </div>
    </div>

  <div id="slider">
<div class="container">
  <div class="row">
    <div class="col-md-6 align-self-center">
      <h1> Faça já seu cadastro e aproveite os nossos serviços</h1>
      <h4>Todo o carinho e cuidado que o seu pet merece!</h4>
      <a href="index-inicial.php" class="btn btn-outline-secondary button">Página inicial</a>
      <a href="cadastro_cliente.php" class="btn btn-primary button">Cadastra-se</a>
    </div>
    <div class="col-md-6 align-self-center text-center">
      <img src="_img/Cat and dog.gif" class="img-fluid" alt="Um gatinho e um cachorrinho.">
    </div>
  </div>
</div>

<div class="container-fluid card">
      <h1 class="text-center mt-5 display-3 fw-bold"> <span class="theme-text">Conheça alguns serviços</span></h1>
      <hr class="mx-auto mb-5 w-25">
      <div class="row mb-5">
          <div class="col-12 col-sm-6 col-md-3 m-auto tamanho">
              <!-- card starts here -->
              <div class="card shadow">
                  <img src="_img/banho.png" alt="" class="card-img-top" height= "300" >
                  <div class="card-body">
                      <h3 class="text-center">Banho <br> (Básico)</h3>
                      <hr class="mx-auto w-75">
                      <p>
                         Para deixar seu pet sempre cheiroso e bonito.
                      </p>
                      <p>
                      R$50
                      </p>
                  </div>
              </div>
              <!-- card ends here -->
          </div>
          <!-- col ends here -->
          <div class="col-12 col-sm-6 col-md-3 m-auto tamanho">
              <!-- card starts here -->
              <div class="card shadow">
                  <img src="_img/tosa.png" alt="" class="card-img-top" height= "300" >
                  <div class="card-body">
                      <h3 class="text-center">Tosa <br> (Básico)</h3>
                      <hr class="mx-auto w-75">
                      <p>
                      Para deixar seu pet sempre na régua.
                      </p>
                      <p>R$60</p>
                  </div>
              </div>
              <!-- card ends here -->
          </div>
          <!-- col ends here -->
          <div class="col-12 col-sm-6 col-md-3 m-auto tamanho">
              <!-- card starts here -->
              <div class="card shadow">
                  <img src="_img/bet.jpg" alt="" class="card-img-top" height= "300" >
                  <div class="card-body">
                      <h3 class="text-center">Banho <br> e tosa  </h3>
                      <hr class="mx-auto w-75">
                      <p>
                        Combinação para um pet cheiroso e bonitão.
                      </p>
                      <p>R$80</p>
                  </div>
              </div>
              <!-- card ends here -->
          </div>
          <!-- col ends here -->
          <div class="col-12 col-sm-6 col-md-3 m-auto tamanho">
              <!-- card starts here -->
              <div class="card shadow">
                  <img src="_img/unha.jpg" alt="" class="card-img-top" height= "300">
                  <div class="card-body">
                      <h3 class="text-center">Corte <br> de Unha </h3>
                      <hr class="mx-auto w-75">
                      <p>
                        Uma incrivel pedicure no seu pet.
                      </p>
                      <br>
                      <p>R$30</p>
                  </div>
              </div>
              <!-- card ends here -->
          </div>
          <!-- col ends here -->
          <div class="col-12 col-sm-6 col-md-3 m-auto tamanho">
              <!-- card starts here -->
              <div class="card shadow">
                  <img src="_img/higienica.jpg" alt="" class="card-img-top" height= "300" >
                  <div class="card-body">
                      <h3 class="text-center">Higiênica <br> ( Básico) </h3>
                      <hr class="mx-auto w-75">
                      <p>
                      Um serviço de higiene completa para o seu pet.
                      </p>
                      <p>R$20</p>
                  </div>
              </div>
              <!-- card ends here -->
          </div>
          <div class="col-12 col-sm-6 col-md-3 m-auto tamanho">
              <!-- card starts here -->
              <div class="card shadow">
                  <img src="_img/banhohig.jpg.jpeg" alt="" class="card-img-top " height= "300" >
                  <div class="card-body">
                      <h3 class="text-center">Banho <br>com Higiênica</h3>
                      <hr class="mx-auto w-75">
                      <p>
                      A combinação para um pet cheiroso e higienizado.
                      </p>
                      <p>R$60</p>
                  </div>
              </div>
              <!-- card ends here -->
      </div>
      <div class="col-12 col-sm-6 col-md-3 m-auto tamanho">
              <!-- card starts here -->
              <div class="card shadow">
                  <img src="_img/clubinho.jpeg" alt="" class="card-img-top " height= "300" >
                  <div class="card-body">
                      <h3 class="text-center">Clubinho <br> (Básico)</h3>
                      <hr class="mx-auto w-75">
                      <p>
                      Um pacote mensal para o seu pet com tudo que ele tem direito.
                      </p>
                      <p>R$180</p>
                  </div>
              </div>
              <!-- card ends here -->
  </div>

  <div class="col-12 col-sm-6 col-md-3 m-auto tamanho">
              <!-- card starts here -->
              <div class="card shadow">
                  <img src="_img/Dog walking-rafiki.svg" alt="" class="card-img-top " height= "300" >
                  <div class="card-body">
                      <h3 class="text-center">Clubinho <br> (Plus)</h3>
                      <hr class="mx-auto w-75">
                      <p>
                      Um pacote mensal para o seu pet com com transporte incluso.
                      </p>
                      <p>R$220</p>
                  </div>
              </div>

              
              <!-- card ends here -->
  </div>
</div>


  <!-- Footer -->
<footer class="text-center text-lg-start bg-light text-muted" id="rodape">
<!-- Section: Social media -->
<section class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom">
</section>
<!-- Section: Social media -->

<!-- Section: Links  -->
<section class="">
  <div class="container text-center text-md-start mt-5">
    <!-- Grid row -->
    <div class="row mt-3">
      <!-- Grid column -->
      <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
        <!-- Content -->
        <h6 class="text-uppercase fw-bold mb-4"> 
          <i class="fas fa-gem me-3"> <img src="_img/diamond.png" class="img-fluid" ></i> Pet&Gatô House
        </h6>
        <p>
          Desde 2016, a Pet&Gatô nasceu com o objetivo de melhorar a vida dos tutores e seus pets fornecendo agendamento de atendimento com a pontualidade que só a nossa empresa oferece para os clientes. Além disso, utilizamos produtos de excelente qualidade e um ambiente acolhedor para que o seu pet fique confortável e cheiroso.
          
        </p>
      </div>
      <!-- Grid column -->

      <!-- Grid column -->
      <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
        <!-- Links -->
        <h6 class="text-uppercase fw-bold mb-4">
          Acesso ao site
        </h6>
        <p>
          <a href="servicos.php" class="text-reset">Serviços</a>
        </p>
        <p>
          <a href="contato.php" class="text-reset">Contato</a>
        </p>
        <p>
          <a href="#!" class="text-reset">Sobre</a>
        </p>
        
      </div>
      <!-- Grid column -->

      

      <!-- Grid column -->
      <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
        <!-- Links -->
        <h6 class="text-uppercase fw-bold mb-4" >Contato</h6>
        <p> <img src="_img/home (1).png" class="img-fluid" ><i class="fas fa-home me-3"></i> Rua Manoel Gomes, 20 - Duque de Caxias- Rj </p>
        <p> <img src="_img/mail.png" class="img-fluid" >
          <i class="fas fa-envelope me-3"></i>
          petegatooficial1@gmail.com
        </p>
        <p ><img src="_img/phone (1).png" class="img-fluid" ><i class="fas fa-phone me-3"></i> (21) 94002-8922</p>
        <p><img src="_img/phone (1).png" class="img-fluid" ><i class="fas fa-print me-3"></i> (21) 97683-9732</p>
      </div>
      <!-- Grid column -->
    </div>
    <!-- Grid row -->
  </div>
</section>
<!-- Section: Links  -->

<!-- Copyright -->
<div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.05);">
  © 2022 Copyright:
  <a class="text-reset fw-bold" href="#">Pet&Gatô - House</a>
</div>
<!-- Copyright -->
</footer>
<!-- Footer -->

<a id="topo-link" href="#">&#9650;</a>

</body>

</html>