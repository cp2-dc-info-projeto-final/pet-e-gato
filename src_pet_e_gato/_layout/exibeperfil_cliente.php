<?php

$mysqli = mysqli_connect("localhost","administrador","2122","pet_e_gato");


$exibir = $_REQUEST['operacao_exibir'];

if($exibir == "exibir")
{
    $nome = $_REQUEST["nome"];
    $email = $_REQUEST["email"];  
    $data_nasc = $_REQUEST["data_nasc"]; 
    $data_nasc = $_REQUEST["data_nasc"];


    $sql = "UPDATE cliente SET nome='$nome', email='$email', data_nasc='$data_nasc' WHERE email='$email'";

    mysqli_query($mysqli,$sql);

header('Location: funcionario.php');
}
?>