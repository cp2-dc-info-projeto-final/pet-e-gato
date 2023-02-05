<?php 
session_start();

include "conecta_mysql.php";


    $email_cliente = $_SESSION["email_cliente"];
    $confirmasenha = $_REQUEST["confirmasenha"];
    $alterarsenha = $_REQUEST["senhaalterar"];

    if ($alterarsenha != $confirmasenha){
        $_SESSION["msg_rec"] = "<div class='alert alert-danger'>As senhas devem ser iguais.</div>";
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
        $mensagem = utf8_decode("<h2>A Pet&Gatô detectou uma alteração na sua senha.</h2> <h3>Caso não tenha sido você, <a href='http://localhost/pet-e-gato/src_pet_e_gato/_layout/recuperar-senha.php'>clique aqui</a> para redefinir sua senha.</h3> <br> <smallPet&Gatô House</small>");
        envia_email($para, $assunto, $mensagem);

    $_SESSION['msg_rec'] = "<div class='alert alert-success'>Senha Atualizada! Faça login.</div>";
        
    header('location: login.php');



?>