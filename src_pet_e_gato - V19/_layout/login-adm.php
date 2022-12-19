<?php

session_start();

$email = $_REQUEST["email"];
$senha = $_REQUEST["senha"];

$mysqli = mysqli_connect("localhost","administrador","2122","pet_e_gato");
$sql = "SELECT * FROM administrador WHERE email = '$email';";
$res = mysqli_query($mysqli, $sql);

$adm = mysqli_fetch_array($res);

if(!password_verify($senha, $adm["senha"]) or mysqli_num_rows($res) != 1){
    $_SESSION['msg_login_adm'] = "<div class='alert alert-danger'>Senha ou email inválidos!</div>";
    header("Location: login-adm.html");
}
else{
    $_SESSION["email"] = $email;
    $_SESSION["senha"] = $adm["senha"];
    header("Location: index-adm.php");

}


?>