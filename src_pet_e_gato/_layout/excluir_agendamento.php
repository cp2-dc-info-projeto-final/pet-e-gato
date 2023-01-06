<?php
$mysqli = mysqli_connect("localhost","administrador","2122","pet_e_gato");


$cod_agendamento = $_REQUEST["cod_agendamento"];
$sql = "DELETE FROM agendamento WHERE cod_agendamento = $cod_agendamento;";
mysqli_query($mysqli,$sql);

header('location: calendario_cliente.php');

mysqli_close($mysqli);
?>