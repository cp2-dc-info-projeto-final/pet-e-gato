<?php

include "autentica-adm.php";
include "conecta_mysql.php";

$sql = "SELECT * FROM administrador WHERE email = '$email';";
$res = mysqli_query($mysqli,$sql);
$administrador = mysqli_fetch_array ($res);

        if(!mysqli_query($mysqli,$sql)){
            echo mysqli_error($mysqli);
            exit;
        }
?>

<!doctype html>
<html lang="pt-br">

  <head>

    <title>Perfil do adm | Pet&Gatô</title>
    
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
    <script type="text/javascript" src="http://code.jquery.com/jquery-1.7.2.min.js"></script>
  </head>

  <body class="fadeIn">

  <div id="header">
        <div class="container">
          <nav class="navbar navbar-expand-lg navbar-light justify-content-between">
              
              <a class="navbar-brand" href="#"></a>
              <a href="index-adm.php" ><img src="_img/logo_petgato.png" class="img-center" width="15%"/></a>
              
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
                    <a class="nav-link active" aria-current="page" href="index-adm.php"> Início</a>
                  </li>

                  <li class="nav-item">
                    <a class="nav-link" href="servicos-adm.php">Serviços</a>
                  </li>

                  <li class="nav-item">
                    <a class="nav-link" href="calendario_adm.php">Calendário</a>
                  </li>

                  <ul class="navbar-nav nav-item mr-auto">
                          <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Empresa</a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                              <a class="dropdown-item" href="administradores.php">Administradores</a>
                              <a class="dropdown-item" href="clientes.php">Clientes</a>
                              <a class="dropdown-item" href="funcionario.php">Funcionários</a>
                            </div>
                          </li>
                  </ul>

                  <ul class="navbar-nav nav-item mr-auto">
                          <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> Cadastrar</a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                              <a class="dropdown-item" href="cadastro_servicos.php">Serviços</a>
                              <a class="dropdown-item" href="cadastrar_horario.php">Horários</a>
                              <a class="dropdown-item" href="cadastro_funcionario.php">Funcionários</a>
                              <a class="dropdown-item" href="cadastro_adm.php">Administrador</a>
                            </div>
                          </li>
                  </ul>

                  <li class="nav-item">
                    <a class="nav-link" href="perfil_adm.php">Perfil</a>
                  </li>

                  <li class="nav-item">
                    <a class="nav-link" href="logout-adm.php">Sair</a>
                  </li>
 
                   </ul>
              </div>
          </nav>
        </div>
    </div>

<div class="container rounded bg-white mt-2">
        <div class="row">
            <div class="col-md-4 border-right">
                <div class="d-flex flex-column align-items-center text-center p-3 py-2"><img class="rounded-circle mt-5" src="_img/perfil-adm.gif" width="100%"><span class="font-weight-bold"><?php echo utf8_encode($cliente['nome'])?></span><span class="text-black-50"><?php echo $cliente['email']?></span><span></span></div>
                </div>
                <div class="col-md-8">
                <div class="p-3 py-5">

                <form id="formenviar" action="editarperfil_adm.php" method="POST" class="login-form">
                  <input type="hidden" name="operacao_editar" value="editar">
                  <input type="hidden" name="email" value="<?php echo $email?>">

                  <?php
                    if(isset($_SESSION['msg_atualiza'])){
                      echo $_SESSION['msg_atualiza'];
                      unset($_SESSION['msg_atualiza']);
                    }
                  ?>

                    <fieldset>

                    <legend class="font-weight-bold">SUAS INFORMAÇÕES:</legend>

                <div class="form-group">

                    <div class="row mt-2">
                        <div class="col-md-12">
                            <span class="font-weight-bold">Nome completo:</span>
                            <span class="text-black-50"><?php echo utf8_encode($administrador['nome'])?></span>
                        </div>
                    </div>

                    <div class="row mt-2">
                        <div class="col-md-12">
                            <span class="font-weight-bold">E-mail:</span>
                            <span class="text-black-50"><?php echo $administrador['email']?></span>
                        </div>
                    </div>
                    
                    <div class="row mt-2">
                        <div class="col-md-12">
                            <span class="font-weight-bold">Data de nascimento:</span>
                            <span class="text-black-50"><?php echo date('d/m/Y', strtotime($administrador['data_nasc']))?></span>
                        </div>
                    </div>

                    <script> 

                      function ocultar() {
                        var marcados = document.querySelector("input[type=radio]:checked");
                        var botao = document.getElementById("botao");
                        botao.style.display = (marcados != null) ? "block" : "none";
                      }

                      function fechar(){
                        let modal = document.querySelector('.fechar')
                        modal.style.display ='none'
                      }

                      </script>

                      <div class="form-group row mt-2">
                      <label class="font-weight-bold">Deseja criar uma nova senha?</label>

                      <div class="form-check container checkyes">
                      <input class="form-check-input" onclick="ocultar()" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                      <label class="form-check-label" for="flexRadioDefault1">
                        SIM
                      </label>
                      </div>
                      <div class="form-check container checkno">
                      <input class="form-check-input" onclick="fechar()" type="radio" name="flexRadioDefault" id="flexRadioDefault2">
                      <label class="form-check-label" for="flexRadioDefault2">
                        NÃO
                      </label>
                      </div>

                    <div class="form-group d-flex">
                    <input type="password" id="botao" style="display:none" class="form-control rounded-left fechar" name="senha" placeholder="Digite a nova senha" minlength="5">
                    </div>

                  <div class="row mt-2 form-group"> 
                    <div class="col-md-6 mt-5 text-left"><button class="btn btn-primary rounded submit p-2 px-4 profile-button" type="submit" value="Salvar alterações" name="submit">Salvar alterações</button></div>
  
           
                    <div class="mt-4 text-right col-md-6"><a class="btn btn-dark rounded p-1 px-4 mt-5 profile-button" href="administradores.php" value="submit" name="submit" >Visualizar adms</a></div>
                  </div>
            </div>
        </div>
    </div>

<!-- Copyright -->
<div class="text-center p-4 rodapeposicao" style="background-color: rgba(0, 0, 0, 0.05);">
  © 2023 Copyright:
  <a class="text-reset fw-bold" href="index-adm.php">Pet&Gatô - House</a>
</div>
<!-- Copyright -->
</footer>
<!-- Footer -->

<a href="#" class="topo-link">&#9650;</a>

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