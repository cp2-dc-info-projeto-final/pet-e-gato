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
        
        include "envia_email.php";
        $para = $email;
        $assunto = utf8_decode("Atualização cadastral | Pet&Gatô");
        $mensagem = utf8_decode("<h2><u>Olá $nome!</u></h2> <br> <small>Administrador Pet&Gatô</small> <br> <h3>O seu administrador alterou algumas informações do seu cadastro. Faça login para verificar.</h3> <br> <h3>IMPORTANTE: A sua senha não foi alterada.</h3> <br>");
        envia_email($para, $assunto, $mensagem);

        header('Location: administradores.php');
    }

    else{
        $sql = "UPDATE administrador SET nome='$nome', email='$email', senha='$senha_cript', data_nasc='$data_nasc' WHERE matricula='$matricula'";

        mysqli_query($mysqli,$sql);

        include "envia_email.php";
        $para = $email;
        $assunto = utf8_decode("Atualização cadastral | Pet&Gatô");
        $mensagem = utf8_decode("<h2><u>Olá $nome!</u></h2> <br> <small>Administrador Pet&Gatô</small> <br> <h3>O seu administrador alterou algumas informações do seu cadastro. Faça login com sua senha provisória e depois altere-a na aba perfil.</h3> <br> <h3>A sua senha provisória é: <u><i>$senha</i></u></h3> <br>");
        envia_email($para, $assunto, $mensagem);

        header('Location: administradores.php');
    }
}

?>