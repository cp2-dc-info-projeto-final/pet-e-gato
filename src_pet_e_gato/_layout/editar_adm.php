<?php

include "conecta_mysql.php";

$editar = $_REQUEST['operacao_editar'];

if($editar == "editar")
{
    $nome = $_REQUEST["nome"];
    $email = $_REQUEST["email"];  
    $senha = $_REQUEST["senha"];
    $data_nasc = $_REQUEST["data_nasc"]; 
    $matricula = $_REQUEST["matricula"];

    $senha_cript = password_hash($senha, PASSWORD_DEFAULT);

    if(empty($senha)){
        $sql = "UPDATE administrador SET nome='$nome', email='$email', data_nasc='$data_nasc' WHERE matricula='$matricula'";
        mysqli_query($mysqli,$sql);

        header('Location: administradores.php');
    }

    else{
        $sql = "UPDATE administrador SET nome='$nome', email='$email', senha='$senha_cript', data_nasc='$data_nasc' WHERE matricula='$matricula'";

        mysqli_query($mysqli,$sql);

        include "envia_email.php";
        $para = $email;
        $assunto = utf8_decode("Sua senha foi alterada! | Pet&Gatô");
        $mensagem = utf8_decode("A sua nova senha é $senha");
        envia_email($para, $assunto, $mensagem);

        header('Location: administradores.php');
    }
}

?>