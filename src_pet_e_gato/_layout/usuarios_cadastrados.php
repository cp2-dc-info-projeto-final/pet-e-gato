<?php

include "conecta_mysql.php";
    
session_start();

$operacao = $_POST["operacao"];

if ($operacao == "cliente"){

    $cpf = utf8_decode($_POST["cpf"]);
    $nome = utf8_decode($_POST["nome"]); 
    $email = utf8_decode($_POST["email"]);
    $senha = utf8_decode($_POST["senha"]);
    $repetesenha = utf8_decode($_POST["repetesenha"]);
    $data_nasc = utf8_decode($_POST["data_nasc"]);
    $endereco = utf8_decode($_POST["endereco"]);
    $nome_pet = utf8_decode($_POST["nome_pet"]);
    $nasc_pet = utf8_decode($_POST["nasc_pet"]);
    $telefone = utf8_decode($_POST["telefone"]);

    $sql = "SELECT * FROM cliente;";
    $res = mysqli_query($mysqli, $sql);
    $linhas = mysqli_num_rows($res);

    $erro_email = 0;
    $erro_tel = 0;
    $erro_cpf = 0;
    $cont = 0;

    for($i=0; $i < $linhas; $i++){
        $resultado = mysqli_fetch_array($res);
        
        if($resultado['email'] == $email){ 
            $erro_email = 1;
            $cont ++;
        }
        if($resultado['telefone'] == $telefone){
            $erro_tel = 1;
            $cont ++;
        }
        if($resultado['cpf'] == $cpf){
            $erro_cpf = 1;
            $cont ++;
        }
        if($cont == 3){
            $_SESSION['mensagem_erro'] = "<div class='alert alert-danger'>E-mail, telefone e CPF já cadastrados</div>";
            header("Location: cadastro_cliente.php");
            exit;
        }
        if ($senha != $repetesenha){
            $_SESSION['mensagem_erro'] = "<div class='alert alert-danger'>As senhas devem ser iguais</div>";
            header("Location: cadastro_cliente.php");
            exit;
        }
        elseif(($erro_email == 1) && ($erro_tel == 1)){
            $_SESSION['mensagem_erro'] = "<div class='alert alert-danger'>E-mail e telefone já cadastrados</div>";
            header("Location: cadastro_cliente.php");
            exit;
        }
        elseif(($erro_email == 1) && ($erro_cpf == 1)){
            $_SESSION['mensagem_erro'] = "<div class='alert alert-danger'>E-mail e CPF já cadastrados</div>";
            header("Location: cadastro_cliente.php");
            exit;
        }
        elseif(($erro_tel == 1) && ($erro_cpf == 1)){
            $_SESSION['mensagem_erro'] = "<div class='alert alert-danger'>Telefone e CPF já cadastrados</div>";
            header("Location: cadastro_cliente.php");
            exit;
        }
        elseif($erro_email == 1){
            $_SESSION['mensagem_erro'] = "<div class='alert alert-danger'>E-mail já cadastrado</div>";
            header("Location: cadastro_cliente.php");
            exit;
        }
        elseif($erro_cpf == 1){
            $_SESSION['mensagem_erro'] = "<div class='alert alert-danger'>CPF já cadastrado</div>";
            header("Location: cadastro_cliente.php");
            exit;
        }
        elseif($erro_tel == 1){
            $_SESSION['mensagem_erro'] = "<div class='alert alert-danger'>Telefone já cadastrado</div>";
            header("Location: cadastro_cliente.php");
            exit;
        }
        
    }

    $senha_cript = password_hash($senha, PASSWORD_DEFAULT);

    $sql = "INSERT INTO cliente (cpf, nome, email, senha, data_nasc, endereco, nome_pet, nasc_pet, telefone) VALUES ('$cpf','$nome', '$email', '$senha_cript', '$data_nasc', '$endereco', '$nome_pet', '$nasc_pet', '$telefone');";
    mysqli_query($mysqli,$sql);

      /*if(!mysqli_query($mysqli,$sql)){
        echo mysqli_error($mysqli);
    }*/

    include "envia_email.php";
    $para = $email;
    $assunto = utf8_decode("Bem-vindo (a) | Pet&Gatô");
    $mensagem = utf8_encode("<h2><u>Olá $nome!</u></h2> <br> <small>Cliente Pet&Gatô</small> <br> <h3>Seja bem-vindo a Pet&Gatô!</h3> <h4>Estamos felizes que você nos escolheu.</h4> <h5>Acesse o nosso site e conheça nossos serviços.</h5> <br> <b><small>Pet&Gatô House</small></b>");
    envia_email($para, $assunto, $mensagem);

        $_SESSION['mensagem_erro'] = "<div class='alert alert-success'>Cadastro realizado com sucesso! Faça login.</div>";
        header('location: login.php');

}
?>