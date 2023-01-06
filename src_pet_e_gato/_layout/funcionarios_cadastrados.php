<?php

include "conecta_mysql.php";

session_start();

$operacao = $_POST["operacao"];

if($operacao == "funcionario"){

    $nome = utf8_decode($_POST["nome"]); 
    $email = utf8_decode($_POST["email"]);
    $senha = utf8_decode($_POST["senha"]);
    $repetesenha = utf8_decode($_POST["repetesenha"]);
    $data_nasc = utf8_decode($_POST["data_nasc"]);
    $especialidade = utf8_decode($_POST["especialidade"]);

    $sql = "SELECT * FROM funcionario;";
    $res = mysqli_query($mysqli, $sql);
    $linhas = mysqli_num_rows($res);

    $erro_email = 0;

    for($i=0; $i < $linhas; $i++){
        $resultado = mysqli_fetch_array($res);

      if ($senha != $repetesenha){
        $_SESSION['mensagem_erro'] = "<div class='alert alert-danger'>As senhas devem ser iguais</div>";
        header("Location: cadastro_funcionario.php");
        exit;
      }
      if($resultado['email'] == $email){ 
            $erro_email = 1;
            $cont ++;
      }
      if($erro_email == 1){
        $_SESSION['mensagem_erro'] = "<div class='alert alert-danger'>E-mail já cadastrado</div>";
        header("Location: cadastro_funcionario.php");
        exit;
      }
    }
    
    $senha_cript = password_hash($senha, PASSWORD_DEFAULT);

    $sql = "INSERT INTO funcionario (nome, email, senha, data_nasc, especialidade) VALUES ('$nome','$email','$senha_cript','$data_nasc','$especialidade');";  
    $mysqli = mysqli_connect("localhost","administrador","2122","pet_e_gato");
    
      if(!mysqli_query($mysqli,$sql)){
        echo mysqli_error($mysqli);
      }
 
      $_SESSION['mensagem_erro'] = "<div class='alert alert-success'>Cadastro realizado com sucesso!</div>";
      header('location: cadastro_funcionario.php');

}

?>