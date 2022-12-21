<?php
session_start();

$cod = $_SESSION["cod_senha"];
$cod_senha = $_REQUEST["codigo"];

if($cod == $cod_senha){
    header("Location: redefinir-senha.php");
}
else{
    header("Location: recuperar-senha-cod.php");
    $_SESSION["msg_rec"] = "<div class='alert alert-danger'>Código incorreto!</div>"; 
}

?>