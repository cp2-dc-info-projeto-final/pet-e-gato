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
    $assunto = utf8_decode("Recuperação de senha | Pet&Gatô");
    $mensagem = utf8_decode("<h2>Redefina sua senha</h2> <br> <small>Cliente Pet&Gatô</small> <br> <h3>Seu código de redefinição de senha é:</h3> <h2>$code</h2> <br> <smallPet&Gatô House</small>");

    envia_email($para, $assunto, $mensagem);

    $_SESSION['msg_rec'] = "<div class='alert alert-success' role='alert'>Digite o código enviado para o seu e-mail!</div>";
    header("Location: recuperar-senha-cod.php");

    $_SESSION['cod_senha'] = $code;
    $_SESSION['email_cliente'] = $email;

    exit;
}

if(empty($resultado)){
    $_SESSION['msg_rec'] = "<div class='alert alert-danger'>Email não encontrado.</div>";
    header("Location: recuperar-senha.php");  
    exit;
}
if (!mysqli_query($mysqli,$sql)){
    echo mysqli_error($mysqli);
}
?>