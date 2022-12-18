<?php

session_start();

$operacao = $_POST["operacao"];

if($operacao == "contato"){

    $nome = utf8_decode($_POST["nome"]); 
    $email = utf8_decode($_POST["email"]);
    $telefone = utf8_decode($_POST["telefone"]);
    $mensagem = utf8_decode($_POST["mensagem"]);

    $sql = "INSERT INTO contato (nome, email, telefone, mensagem) VALUES ('$nome','$email','$telefone','$mensagem');";  
    $mysqli = mysqli_connect("localhost","administrador","2122","pet_e_gato");
    
      if(!mysqli_query($mysqli,$sql)){
        echo mysqli_error($mysqli);
      }
 
      $_SESSION['mensagem_sucesso'] = "<div class='alert alert-success'>Mensagem enviada!</div>";
      header('location: redirecionar.php');
      exit;

}

?>