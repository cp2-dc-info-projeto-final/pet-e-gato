<?php
include "conecta_mysql.php";


$matricula = $_REQUEST["matricula"];
$sql = "DELETE FROM cliente WHERE matricula = $matricula;";
mysqli_query($mysqli,$sql);

header('location: index.php');

mysqli_close($mysqli);
?>