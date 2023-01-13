<?php
include "autentica-adm.php";
include "conecta_mysql.php";

$cod_agendamento = $_REQUEST['cod_agendamento'];

$sql = "UPDATE agendamento SET cod_cliente = NULL, nome_cliente = NULL WHERE cod_agendamento = '$cod_agendamento'"; 
mysqli_query($mysqli,$sql);

if (!mysqli_query($mysqli,$sql)){
    echo mysqli_error($mysqli);
}

header ('location: calendario_adm.php');

?>