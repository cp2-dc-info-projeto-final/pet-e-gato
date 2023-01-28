<?php

session_start();
include "conecta_mysql.php";


$cod_agendamento = $_REQUEST["cod_agendamento"];
$sql = "DELETE FROM agendamento WHERE cod_agendamento = $cod_agendamento;";
mysqli_query($mysqli,$sql);

$_SESSION['mensagem_agendamento'] = "<div class='alert alert-success'>Agendamento excluído!</div>";


header('location: calendario_adm.php');

mysqli_close($mysqli);

?>