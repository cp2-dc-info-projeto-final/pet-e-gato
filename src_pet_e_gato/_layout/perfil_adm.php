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
              <a href="index-adm.php" ><img src="_img/logo_petgato.png" class="img-center" width="25%"/></a>
              
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
                    <a class="nav-link" href="administradores.php">Administradores</a>
                  </li>

                  <li class="nav-item">
                    <a class="nav-link" href="clientes.php">Clientes</a>
                  </li>

                  <li class="nav-item">
                    <a class="nav-link" href="funcionario.php">Funcionários</a>
                  </li>

                  <ul class="navbar-nav nav-item mr-auto">
                          <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> Cadastrar</a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                              <a class="dropdown-item" href="cadastro_servicos.php">Serviços</a>
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

                <form>

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
                    
                    <div class="mt-5 text-right"><a class="btn btn-primary profile-button" href="administradores.php" value="submit" name="submit" >Visualizar administradores</a></div>
                </div>
            </div>
        </div>
    </div>