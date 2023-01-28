<?php

include "autentica-adm.php";
include "conecta_mysql.php";

$editar = $_REQUEST['operacao_editar'];

if($editar == "editar")
{  
    $senha = $_REQUEST["senha"];
    $email = $_REQUEST["email"];

    $senha_cript = password_hash($senha, PASSWORD_DEFAULT);

    if(empty($senha)){

        header('Location: perfil_adm.php');
    }

    else{
        $sql = "UPDATE administrador SET senha='$senha_cript' WHERE email='$email'";

        mysqli_query($mysqli,$sql);

        include "envia_email.php";
        $para = $email;
        $assunto = utf8_decode("Sua senha foi alterada! | Pet&Gatô");
        $mensagem = utf8_decode("<h2><u>Olá!</u></h2> <br> <small>Administrador Pet&Gatô</small> <br> <h3>Sua senha foi alterada com sucesso.</h3>");
        envia_email($para, $assunto, $mensagem);

        $_SESSION['msg_atualiza'] = "<div class='alert alert-success'>Cadastro atualizado! Faça login novamente.</div>";

        header('Location: perfil_adm.php');
    }
}

?>