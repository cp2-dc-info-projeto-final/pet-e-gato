<?php

session_start();

include "conecta_mysql.php";

$email = $_REQUEST["emailrec"];

$sql= "SELECT * FROM cliente WHERE  email = '$email'";
$res= mysqli_query($mysqli,$sql);
$linhas= mysqli_num_rows($res);

$resultado = mysqli_fetch_array ($res);

$code = rand(100000,999999);

if($resultado["email"] == $email){

    include "envia_email.php";

    $para = $resultado["email"];
    $assunto = "Recuperação de senha"
    $mensagem = "$code";

    envia_email($para, $assunto, $mensagem);

    $_SESSION['msg_rec'] = "<div class='alert alert-success' role='alert'>Enviamos uma mensagem para o seu email</div>";
    header("Location: recuperar-senha-cod.php");

    $_SESSION['cod_senha'] = $code;
    $_SESSION['email_cliente'] = $email;

    exit;
}

if(empty($resultado)){
    $_SESSION['msg_rec'] = "<div class='alert alert-danger'>Email não encontrado</div>";
    header("Location: recuperar-senha.php");  
    exit;
}
if (!mysqli_query($mysqli,$sql)){
    echo mysqli_error($mysqli);
}
?>