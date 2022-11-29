<?php
$operacao = $_POST["operacao"];

if($operacao == "funcionario"){

    $nome = $_POST["nome"]; 
    $email = $_POST["email"];
    $senha = $_POST["senha"];
    $data_nasc = $_POST["data_nasc"];
    
    $senha_cript = password_hash($senha, PASSWORD_DEFAULT);

    $sql = "INSERT INTO funcionario (nome, email, senha, data_nasc) VALUES ('$nome','$email','$senha_cript','$data_nasc');";  
    $mysqli = mysqli_connect("localhost","administrador","2122","pet_e_gato");
    
      if(!mysqli_query($mysqli,$sql)){
        echo mysqli_error($mysqli);
      }
 
    header ('location: login-funcionario.php');

}

?>