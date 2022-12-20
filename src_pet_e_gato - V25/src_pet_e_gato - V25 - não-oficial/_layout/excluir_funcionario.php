<?php
$mysqli = mysqli_connect("localhost","administrador","2122","pet_e_gato");


$matricula = $_REQUEST["matricula"];
$sql = "DELETE FROM funcionario WHERE matricula = $matricula;";
mysqli_query($mysqli,$sql);

header('location: funcionario.php');

mysqli_close($mysqli);
?>