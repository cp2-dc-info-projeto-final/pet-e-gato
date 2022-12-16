<?php

include "conecta_mysql.php";
    
session_start();

$operacao = $_POST["operacao"];

if ($operacao == "agendamento"){

    $cpf = utf8_decode($_POST["cpf"]);
    $nome = utf8_decode($_POST["nome"]); 
    $email = utf8_decode($_POST["email"]);
    $servico = utf8_decode($_POST["servico"]);
    $hora = utf8_decode($_POST["hora"]);

    $sql = "INSERT INTO agendamento (cpf, nome, email, servico, hora) VALUES ('$cpf','$nome', '$email', '$servico', '$hora');";
    mysqli_query($mysqli,$sql);

      if(!mysqli_query($mysqli,$sql)){
        echo mysqli_error($mysqli);
      }

}

   