<?php
    
  $operacao = $_POST["operacao"];

    if ($operacao == "servicos"){

    $servico = utf8_decode($_POST["servico"]);
    $descricao = utf8_decode($_POST["descricao"]); 
    $preco = utf8_decode($_POST["preco"]);


    $sql = "INSERT INTO servicos (servico, descricao, preco) VALUES ('$servico','$descricao','$preco');";  
    $mysqli = mysqli_connect("localhost","administrador","2122","pet_e_gato");
    

    
    if(!mysqli_query($mysqli,$sql)){
      echo mysqli_error($mysqli);
      }

    header ('location: index-adm.php');


  }

?>