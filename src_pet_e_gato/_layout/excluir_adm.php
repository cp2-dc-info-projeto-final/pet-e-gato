<?php

include "conecta_mysql.php";

$matricula = $_REQUEST["matricula"];
$sql = "DELETE FROM administrador WHERE matricula = $matricula;";

mysqli_query($mysqli,$sql);

header('location: administradores.php');

mysqli_close($mysqli);

?>