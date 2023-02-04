<?php

include "autentica-adm";
include "conecta_mysql.php";

$editar = $_REQUEST['operacao_editar'];

if($editar == "editar")
{
    $cod_servico = $_REQUEST["cod_servico"];
    $servico = utf8_decode($_REQUEST["servico"]);
    $descricao = utf8_decode($_REQUEST["descricao"]);  
    $preco = $_REQUEST["preco"]; 

    $sql = "UPDATE servicos SET servico='$servico', descricao='$descricao', preco='$preco' WHERE cod_servico='$cod_servico'";

    mysqli_query($mysqli,$sql);

header('Location: servicos-adm.php');
}
?>