<?php
$mysqli = mysqli_connect("localhost","administrador","2122","pet_e_gato");


$cod_servico = $_REQUEST["cod_servico"];
$sql = "DELETE FROM servicos WHERE cod_servico = $cod_servico;";
mysqli_query($mysqli,$sql);

header('location: servicos-adm.php');

mysqli_close($mysqli);
?>