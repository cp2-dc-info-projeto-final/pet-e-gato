<?php

session_start();
include "conecta_mysql.php";


$cod_servico = $_REQUEST["cod_servico"];
$sql = "DELETE FROM servicos WHERE cod_servico = $cod_servico;";
mysqli_query($mysqli,$sql);

$_SESSION['mensagem_servicos'] = "<div class='alert alert-success'>Serviço excluído!</div>";


header('location: servicos-adm.php');

mysqli_close($mysqli);
?>