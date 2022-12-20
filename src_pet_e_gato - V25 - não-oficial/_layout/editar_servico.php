<?php

$mysqli = mysqli_connect("localhost","administrador","2122","pet_e_gato");

$editar = $_REQUEST['operacao_editar'];

if($editar == "editar")
{
    $cod_servico = utf8_decode($_REQUEST["cod_servico"]);
    $servico = utf8_decode($_REQUEST["servico"]);
    $descricao = utf8_decode($_REQUEST["descricao"]);  
    $preco = utf8_decode($_REQUEST["preco"]); 

    $sql = "UPDATE servicos SET servico='$servico', descricao='$descricao', preco='$preco' WHERE cod_servico='$cod_servico'";

    mysqli_query($mysqli,$sql);

header('Location: servicos-adm.php');
}
?>