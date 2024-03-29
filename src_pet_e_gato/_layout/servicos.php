<?php  ?>


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
   
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    <script type="text/javascript" src="http://code.jquery.com/jquery-1.7.2.min.js"></script>
  </head>
  <body class="fadeIn">

  <div id="header">
        <div class="container">
          <nav class="navbar navbar-expand-lg navbar-light justify-content-between">
              
              <a class="navbar-brand" href="#"></a>
              <a href="index.php"><img src="_img/logo_petgato.png" class="img-center" width="10%"/></a>
              
              <nav class="navbar navbar-expand-sm navbar-light bg-faded" id="topo">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#nav-content" aria-controls="nav-content" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
              
              <div class="navbar-collapse" id="nav-content">
                <ul class="navbar-nav">
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="index.php"> Início</a>
                  </li>

                  <li class="nav-item">
                    <a class="nav-link" href="servicos.php">Serviços</a>
                  </li>

                  <li class="nav-item">
                    <a class="nav-link" href="#sobre">Sobre</a>
                  </li>

                    <div class="navbar-collapse" id="nav-content">
                    <ul class="navbar-nav mr-auto">
                          <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> Login </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                              <a class="dropdown-item" href="login.php">Como cliente</a>
                              <a class="dropdown-item" href="login-funcionario.php">Como funcionário</a>
                              <a class="dropdown-item" href="login-adm.html">Como administrador</a>
                            </div>
                          </li>
                      </ul>
                    </div>

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
        <a href="index.php" class="btn btn-outline-secondary button">Página inicial</a>
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
                <a href="#" class="topo-link">&#9650;</a>
                    <img src="_img/Dog walking-rafiki.svg" alt="" class="card-img-top " height= "300" >
                    <div class="card-body">
                        <h3 class="text-center">Clubinho <br> (Plus)</h3>
                        <hr class="mx-auto w-75">
                        <p>
                        Um pacote mensal para o seu pet com transporte incluso.
                        </p>
                        <p>R$220</p>
                    </div>
                </div>

                
                <!-- card ends here -->
    </div>
</div>
  

    <!-- Footer -->
<footer class="text-center text-lg-start bg-light text-muted" id="sobre">
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
    © 2023 Copyright:
    <a class="text-reset fw-bold" href="index.php">Pet&Gatô - House</a>
  </div>
  <!-- Copyright -->
</footer>
<!-- Footer -->



</body>

<script> 
  
      jQuery(document).ready(function() {
                // Exibe ou oculta o botão
                jQuery(window).scroll(function() {
                    if (jQuery(this).scrollTop() > 200) {
                        jQuery('.topo-link').fadeIn(200);
                    } else {
                        jQuery('.topo-link').fadeOut(200);
                    }
                });
                
                // Faz animação para subir
                jQuery('.topo-link').click(function(event) {
                    event.preventDefault();
                    jQuery('html, body').animate({scrollTop: 0}, 300);
                })
            });

</script>


</html>