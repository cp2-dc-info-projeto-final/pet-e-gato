<?php
    
  include "conecta_mysql.php";

  session_start();

  $operacao = $_POST["operacao"];

    if ($operacao == "servicos"){

    $servico = utf8_decode($_POST["servico"]);
    $descricao = utf8_decode($_POST["descricao"]); 
    $preco = utf8_decode($_POST["preco"]);


    $sql = "INSERT INTO servicos (servico, descricao, preco) VALUES ('$servico','$descricao','$preco');";  
    
    if(!mysqli_query($mysqli,$sql)){
      echo mysqli_error($mysqli);
    }

      
      $_SESSION['mensagem_servicos'] = "<div class='alert alert-success'>Serviço registrado!</div>";
      
  }

  header('location: servicos-adm.php');


?>