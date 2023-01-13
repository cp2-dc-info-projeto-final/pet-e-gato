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
                    <a class="nav-link" href="agendamento.php">Agendamento</a>
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
                    <a class="nav-link" href="perfil_funcionario.php">Perfil</a>
                  </li>

                  <li class="nav-item">
                    <a class="nav-link" href="logout.php"> Sair </a>

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

                <form>

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
                        <div class="col-md-6">
                            <span class="font-weight-bold">E-mail:</span>
                            <span class="text-black-50"><?php echo $funcionario['email']?></span>
                        </div>
                        <div class="col-md-6">
                            <span class="font-weight-bold">Data de nascimento:</span>
                            <span class="text-black-50"><?php echo date('d/m/Y', strtotime($funcionario['data_nasc']))?></span>
                        </div>
                    </div>
                    
                    <div class="mt-5 text-right"><a class="btn btn-primary profile-button" href="calendario_func.php" value="submit" name="submit" >Ir para o calendário</a></div>
                </div>
            </div>
        </div>
    </div>