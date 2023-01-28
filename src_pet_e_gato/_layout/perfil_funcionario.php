<?php

include "autentica-funcionario.php";
include "conecta_mysql.php";

$sql = "SELECT * FROM funcionario WHERE email = '$email';";
$res = mysqli_query($mysqli,$sql);
$funcionario = mysqli_fetch_array ($res);

        if(!mysqli_query($mysqli,$sql)){
            echo mysqli_error($mysqli);
            exit;
        }
?>

<!doctype html>
<html lang="pt-br">

  <head>

    <title>Meu perfil</title>
    
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
              <a href="index-func.php"><img src="_img/logo_petgato.png" class="img-center" width="10%"/></a>
              
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
                    <a class="nav-link active" aria-current="page" href="index-func.php"> Início</a>
                  </li>

                  <li class="nav-item">
                    <a class="nav-link" href="calendario_func.php">Agendamentos</a>
                  </li>

                  <li class="nav-item">
                    <a class="nav-link" href="#sobre">Sobre</a>
                  </li>

                  <li class="nav-item">
                    <a class="nav-link" href="perfil_funcionario.php">Perfil</a>
                  </li>

                  <li class="nav-item">
                    <a class="nav-link" href="logout-funcionario.php"> Sair </a>
                  </li>
                </ul>
              </div>
          </nav>
        </div>
    </div>


<div class="container rounded bg-white mt-2">
        <div class="row">
            <div class="col-md-4 border-right">
                <div class="d-flex flex-column align-items-center text-center p-3 py-2"><img class="rounded-circle mt-5" src="_img/perfil-funcionario.gif" width="100%"><span class="font-weight-bold"><?php echo $cliente['nome']?></span><span class="text-black-50"><?php echo $cliente['email']?></span><span></span></div>
                </div>
                <div class="col-md-8">
                <div class="p-3 py-5">

                <form id="formenviar" action="editarperfil_func.php" method="POST" class="login-form">
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
                            <span class="text-black-50"><?php echo $funcionario['nome']?></span>
                        </div>
                    </div>

                    <div class="row mt-2">
                        <div class="col-md-12">
                            <span class="font-weight-bold">CPF:</span>
                            <span class="text-black-50"><?php echo $funcionario['cpf']?></span>
                        </div>
                    </div>

                    <div class="row mt-2">
                        <div class="col-md-12">
                            <span class="font-weight-bold">E-mail:</span>
                            <span class="text-black-50"><?php echo $funcionario['email']?></span>
                        </div>
                    
                    <div class="row mt-2">
                        <div class="col-md-12">
                            <span class="font-weight-bold">Data de nascimento:</span>
                            <span class="text-black-50"><?php echo date('d/m/Y', strtotime($funcionario['data_nasc']))?></span>
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
                    
                    <div class="mt-5 text-right"><button class="btn btn-primary profile-button" type="submit" value="submit" name="submit" >Salvar alterações</button></div>
                </div>
            </div>
        </div>
    </div>