<?php
$operacao = $_POST["operacao"];

if($operacao == "administrador"){

    $nome = utf8_decode($_POST["nome"]); 
    $email = utf8_decode($_POST["email"]);
    $senha = utf8_decode($_POST["senha"]);
    $data_nasc = utf8_decode($_POST["data_nasc"]);
    
    $senha_cript = password_hash($senha, PASSWORD_DEFAULT);

    $sql = "INSERT INTO administrador (nome, email, senha, data_nasc) VALUES ('$nome','$email','$senha_cript','$data_nasc');";  
    $mysqli = mysqli_connect("localhost","administrador","2122","pet_e_gato");
    
      if(!mysqli_query($mysqli,$sql)){
        echo mysqli_error($mysqli);
      }
 
    header ('location: login-adm.html');

}

?>