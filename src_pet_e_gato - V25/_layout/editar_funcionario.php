<?php

$mysqli = mysqli_connect("localhost","administrador","2122","pet_e_gato");

$editar = $_REQUEST['operacao_editar'];

if($editar == "editar")
{
    $nome = $_REQUEST["nome"];
    $email = $_REQUEST["email"];  
    $data_nasc = $_REQUEST["data_nasc"]; 
    $ADM = $_REQUEST["ADM"];
    $matricula = $_REQUEST["matricula"];

    $sql = "UPDATE funcionario SET nome='$nome', email='$email', data_nasc='$data_nasc' WHERE matricula='$matricula'";

    mysqli_query($mysqli,$sql);

header('Location: funcionario.php');
}
?>
