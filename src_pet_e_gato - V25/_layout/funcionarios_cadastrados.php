<?php
$operacao = $_POST["operacao"];

if($operacao == "funcionario"){

    $nome = utf8_decode($_POST["nome"]); 
    $email = utf8_decode($_POST["email"]);
    $senha = utf8_decode($_POST["senha"]);
    $data_nasc = utf8_decode($_POST["data_nasc"]);
    $especialidade = utf8_decode($_POST["especialidade"]);
    
    $senha_cript = password_hash($senha, PASSWORD_DEFAULT);

    $sql = "INSERT INTO funcionario (nome, email, senha, data_nasc, especialidade) VALUES ('$nome','$email','$senha_cript','$data_nasc','$especialidade');";  
    $mysqli = mysqli_connect("localhost","administrador","2122","pet_e_gato");
    
      if(!mysqli_query($mysqli,$sql)){
        echo mysqli_error($mysqli);
      }
 
    header('location: cadastro_funcionario.php');

}

?>