<?php

include "autentica.php";

$mysqli = mysqli_connect("localhost","administrador","2122","pet_e_gato");

$editar = $_REQUEST['operacao_editar'];

if($editar == "editar"){
    $cpf = $_REQUEST["cpf"];
    $nome = $_REQUEST["nome"]; 
    $email = $_REQUEST["email"];
    $data_nasc = $_REQUEST["data_nasc"];
    $endereco = $_REQUEST["endereco"];
    $nome_pet = $_REQUEST["nome_pet"];
    $nasc_pet = $_REQUEST["nasc_pet"];
    $telefone = $_REQUEST["telefone"];

    $sql = "UPDATE cliente SET nome='$nome', email='$email', data_nasc='$data_nasc', cpf='$cpf', endereco='$endereco', telefone='$telefone', nome_pet='$nome_pet', nasc_pet='$nasc_pet' WHERE email='$email'";


    if(!mysqli_query($mysqli,$sql)){
        echo mysqli_error($mysqli);
        exit;
    }

    mysqli_query($mysqli,$sql);

    

    //header('Location: perfil_cliente.php');
}
?>