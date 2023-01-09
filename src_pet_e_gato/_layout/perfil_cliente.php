<?php

include "autentica.php";
include "conecta_mysql.php";

$mysqli = mysqli_connect("localhost","administrador","2122","pet_e_gato");
$sql = "SELECT * FROM cliente WHERE email = '$email';";
$res= mysqli_query($mysqli,$sql);
$linhas= mysqli_num_rows($res);

for ($i = 0; $i < $linhas; $i++){
    $cliente = mysqli_fetch_array ($res);
        

        if(!mysqli_query($mysqli,$sql)){
            echo mysqli_error($mysqli);
        }
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

<div class="container rounded bg-white mt-5">
        <div class="row">
            <div class="col-md-4 border-right">
                <div class="d-flex flex-column align-items-center text-center p-3 py-5"><img class="rounded-circle mt-5" src="_img/perfil.svg" width="90"><span class="font-weight-bold">John Doe</span><span class="text-black-50">john_doe12@bbb.com</span><span>United States</span></div>
                </div>
                <div class="col-md-8">
                <div class="p-3 py-5">
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <div class="d-flex flex-row align-items-center back"><i class="fa fa-long-arrow-left mr-1 mb-1"></i>
                            <h6>Back to home</h6>
                        </div>
                        <h6 class="text-right">Editar perfil</h6>
                    </div>

                <fieldset>

                    <legend>Informações do tutor</legend>

                    <form action="exibeperfil_cliente.php" method="POST">
                        <input type="hidden" name="operacao_exibir" value="exibir">
                        <input type="hidden" name="email" value="<?php echo $email?>">

                    <div class="row mt-2">
                        <div class="col-md-12"><input type="text" class="form-control" placeholder="Nome Completo" value="<?php echo $cliente['nome']?>"></div>
                    </div>
                    <div class="row mt-3">
                    <div class="col-md-6"><input type="text" class="form-control" placeholder="E" value="<?php echo $cliente['endereco']?>"></div>

                        <div class="col-md-6"><input type="text" class="form-control" value="<?php echo $cliente['telefone']?>" placeholder="Telefone"></div>
                    </div>
                    <div class="row mt-3">
                    <div class="col-md-12"><input type="email" class="form-control" placeholder="Email" value="<?php echo $cliente['email']?>"></div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-md-6"><input type="date" class="form-control" placeholder="Data de Nascimento" value="<?php echo $cliente['data_nasc']?>"></div>
                        <div class="col-md-6"><input type="text" class="form-control" value="<?php echo $cliente['cpf']?>" placeholder="CPF"></div>
                    </div>
                
                </fieldset>

                <fieldset>
                    
                    <legend>Informações do tutor</legend>


                    <div class="row mt-2">
                        <div class="col-md-12"><input type="text" class="form-control" placeholder="Nome Completo" value="<?php echo $cliente['nome']?>"></div>
                    </div>
                    <div class="row mt-3">
                    <div class="col-md-6"><input type="text" class="form-control" placeholder="E" value="<?php echo $cliente['endereco']?>"></div>

                        <div class="col-md-6"><input type="text" class="form-control" value="<?php echo $cliente['telefone']?>" placeholder="Telefone"></div>
                    </div>
                    <div class="row mt-3">
                    <div class="col-md-12"><input type="email" class="form-control" placeholder="Email" value="<?php echo $cliente['email']?>"></div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-md-6"><input type="date" class="form-control" placeholder="Data de Nascimento" value="<?php echo $cliente['data_nasc']?>"></div>
                        <div class="col-md-6"><input type="text" class="form-control" value="<?php echo $cliente['cpf']?>" placeholder="CPF"></div>
                    </div>
                    
      
                </fieldset>
                </div>

            </div>
        </div>
    </div>