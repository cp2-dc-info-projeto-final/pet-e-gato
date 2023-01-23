<?php 
session_start();

include "conecta_mysql.php";


    $email_cliente = $_SESSION["email_cliente"];
    $confirmasenha = $_REQUEST["confirmasenha"];
    $alterarsenha = $_REQUEST["senhaalterar"];

    if ($alterarsenha != $confirmasenha){
        $_SESSION["msg_rec"] = "<div class='alert alert-danger'>Senha não compativel!</div>";
        header('location: redefinir-senha.php');
        exit;
    }
    
    $senha_cript = password_hash($alterarsenha, PASSWORD_DEFAULT);

    $sql = "UPDATE cliente SET senha = '$senha_cript'";
    $sql .= "WHERE email = '$email_cliente'";  
    mysqli_query($mysqli,$sql);

    include "envia_email.php";
        $para = $email_cliente;
        $assunto = utf8_decode("Sua senha foi alterada! | Pet&Gatô");
        $mensagem = utf8_decode("A sua nova senha é $confirmasenha");
        envia_email($para, $assunto, $mensagem);

    $_SESSION['msg_rec'] = "<div class='alert alert-success'>Senha Atualizada! Faça login.</div>";
        
    header('location: login.php');



?>