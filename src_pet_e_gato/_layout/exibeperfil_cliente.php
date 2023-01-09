<?php

session_start();

$mysqli = mysqli_connect("localhost","administrador","2122","pet_e_gato");


$exibir = $_REQUEST['operacao_exibir'];

if($exibir == "exibir")
{
    $cpf = utf8_decode($_REQUEST["cpf"]);
    $nome = utf8_decode($_REQUEST["nome"]); 
    $email = utf8_decode($_REQUEST["email"]);
    $data_nasc = utf8_decode($_REQUEST["data_nasc"]);
    $endereco = utf8_decode($_REQUEST["endereco"]);
    $nome_pet = utf8_decode($_REQUEST["nome_pet"]);
    $nasc_pet = utf8_decode($_REQUEST["nasc_pet"]);
    $telefone = utf8_decode($_REQUEST["telefone"]);

    $sql = "UPDATE cliente SET nome='$nome', email='$email', data_nasc='$data_nasc', cpf='$cpf', endereco='$endereco', telefone='$teleone', nome_pet='$nome_pet', nasc_pet='$nasc_pet' WHERE email='$email'";

    mysqli_query($mysqli,$sql);

    header('Location: perfil_cliente.php');
}
?>