<!doctype html>
<html lang="pt-br">

  <head>

    <title>Pet&Gatô House</title>
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <link rel="stylesheet" href="_css/main.css"/>
    <link rel="shortcut icon" href="_img/logo_petgato.png" type="image/x-icon" />
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" 
      integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700;900&display=swap" rel="stylesheet">

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
  
  </head>

  <body class="fadeIn">

    <div id="header">
        <div class="container">
          <nav class="navbar navbar-expand-lg navbar-light justify-content-between">
              
              <a class="navbar-brand" href="#"></a>
              <a href="index.php"><img src="_img/logo_petgato.png" class="img-center" width="10%"/></a>
              
              <nav class="navbar navbar-expand-sm navbar-light bg-faded">
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
                    <a class="nav-link" href="contato.php">Contato</a>
                  </li>

                  <li class="nav-item">
                    <a class="nav-link" href="#">Sobre</a>
                  </li>

                    <div class="navbar-collapse" id="nav-content">
                    <ul class="navbar-nav mr-auto">
                          <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Fazer login
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                              <a class="dropdown-item" href="login.php">Como cliente</a>
                              <a class="dropdown-item" href="login-funcionario.html">Como funcionário</a>
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
        <h1>O PetShop mais delicioso para o seu pet!</h1>
        <h4>Contrate já um de nossos serviços.</h4>
        <a href="contato.php" class="btn btn-primary button">Contato</a>
        <a href="servicos.php" class="btn btn-outline-secondary button">Serviços</a>
      </div>
      <div class="col-md-6 align-self-center text-center">
        <img src="_img/pet_img.svg" class="img-fluid" alt="Um gatinho e um cachorrinho.">
      </div>
    </div>
  </div>


</div>    



</body>