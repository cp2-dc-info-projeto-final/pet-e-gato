<?php

session_start();
include "conecta_mysql.php";


$matricula = $_REQUEST["matricula"];
$sql = "DELETE FROM funcionario WHERE matricula = $matricula;";
mysqli_query($mysqli,$sql);

$_SESSION['msg_excluir'] = "<div class='alert alert-success'>Funcionário excluído!</div>";

header('location: funcionario.php');

mysqli_close($mysqli);
?>