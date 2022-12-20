<?php

$mysqli = mysqli_connect("localhost","administrador","2122","pet_e_gato");

$editar = $_REQUEST['operacao_editar'];

if($editar == "editar")
{
    $servico = $_REQUEST["servico"];
    $hora = $_REQUEST["hora"];  
    $dia = $_REQUEST["dia"]; 
    $cod_agendamento = $_REQUEST["cod_agendamento"];

    $sql = "UPDATE agendamento SET servico='$servico', hora='$hora', dia='$dia' WHERE cod_agendamento='$cod_agendamento'";

    mysqli_query($mysqli,$sql);

header('Location: calendario_cliente.php');
}

if(!mysqli_query($mysqli,$sql)){
    echo mysqli_error($mysqli);
}
?>