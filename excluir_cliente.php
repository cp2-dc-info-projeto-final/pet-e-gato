<?php

session_start();
include "conecta_mysql.php";

$matricula = $_REQUEST["matricula"];
$sql = "DELETE FROM cliente WHERE matricula = $matricula;";
mysqli_query($mysqli,$sql);

$_SESSION['msg_excluir'] = "<div class='alert alert-success'>Cliente excluido!</div>";

header('location: clientes.php');

mysqli_close($mysqli);
?>