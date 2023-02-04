<?php

session_start();
include "conecta_mysql.php";

$operacao = $_POST["operacao"];

if($operacao == "funcionario"){

    $nome = utf8_decode($_POST["nome"]); 
    $email = utf8_decode($_POST["email"]);
    $senha = utf8_decode($_POST["senha"]);
    $repetesenha = utf8_decode($_POST["repetesenha"]);
    $data_nasc = utf8_decode($_POST["data_nasc"]);
    $cpf = utf8_decode($_POST["cpf"]);

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

    $sql = "INSERT INTO funcionario (nome, email, senha, data_nasc, cpf) VALUES ('$nome','$email','$senha_cript','$data_nasc','$cpf');";  
    mysqli_query($mysqli,$sql);

    include "envia_email.php";
    $para = $email;
    $assunto = utf8_decode("Seja bem-vindo | Pet&Gatô");
    $mensagem = utf8_decode("<h2><u>Olá ".utf8_encode($nome)."!</u></h2> <br> <small>Funcionário Pet&Gatô</small> <h3>Agora você faz parte da Pet&Gatô House!</h3> <h4>Faça login com os seus dados e altere sua senha provisória na aba perfil após logar.</h4> <br> <h2>E-mail:</h2> $email <br> <h2>Senha provisória:</h2> $senha <br> <smallPet&Gatô House</small>");
    envia_email($para, $assunto, $mensagem);
 
      $_SESSION['mensagem_erro'] = "<div class='alert alert-success'>Cadastro realizado com sucesso!</div>";

      header('location: cadastro_funcionario.php');

}

?>