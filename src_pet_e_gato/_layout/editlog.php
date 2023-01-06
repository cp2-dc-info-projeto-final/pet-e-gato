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

    $_SESSION['msg_rec'] = "<div class='alert alert-success'>Senha Atualizada!</div>";
        
    header('location: login.php');



?>