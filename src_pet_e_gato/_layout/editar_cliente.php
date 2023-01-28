<?php

include "autentica.php";
include "conecta_mysql.php";

$editar = $_REQUEST['operacao_editar'];

if($editar == "editar"){
    $cpf = $_REQUEST["cpf"];
    $nome = $_REQUEST["nome"]; 
    $email = $_REQUEST["email"];
    $data_nasc = $_REQUEST["data_nasc"];
    $endereco = $_REQUEST["endereco"];
    $senha = $_REQUEST["senha"];
    $nome_pet = utf8_decode($_REQUEST["nome_pet"]);
    $nasc_pet = $_REQUEST["nasc_pet"];
    $telefone = $_REQUEST["telefone"];

    $senha_cript = password_hash($senha, PASSWORD_DEFAULT);

    if(empty($senha)){
        $sql = "UPDATE cliente SET nome='$nome', email='$email', data_nasc='$data_nasc', cpf='$cpf', endereco='$endereco', telefone='$telefone', nome_pet='$nome_pet', nasc_pet='$nasc_pet' WHERE email='$email'";
        mysqli_query($mysqli,$sql);

        $_SESSION['msg_rec'] = "<div class='alert alert-success'>Cadastro atualizado!</div>";

        header('Location: perfil_cliente.php');
    }

    else{
        $sql = "UPDATE cliente SET nome='$nome', email='$email', data_nasc='$data_nasc', cpf='$cpf', endereco='$endereco', telefone='$telefone', senha='$senha_cript', nome_pet='$nome_pet', nasc_pet='$nasc_pet' WHERE email='$email'";

        mysqli_query($mysqli,$sql);

        include "envia_email.php";
        $para = $email;
        $assunto = utf8_decode("Seu cadastro foi atualizado! | Pet&Gatô");
        $mensagem = utf8_decode("A Pet&Gatô detectou uma atualização cadastral em sua conta. Caso não tenha sido você, envie um e-mail para petegatooficial1@gmail.com que te ajudaremos a recuperar o seu acesso.");
        envia_email($para, $assunto, $mensagem);

        $_SESSION['msg_rec'] = "<div class='alert alert-success'>Cadastro atualizado! Faça login novamente.</div>";

        header('Location: perfil_cliente.php');
    }
}

    /*if(!mysqli_query($mysqli,$sql)){
        echo mysqli_error($mysqli);
        exit;
    }*/

?>