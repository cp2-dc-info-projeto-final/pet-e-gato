<?php

include "autentica.php";
include "conecta_mysql.php";
    
$operacao = $_POST["operacao"];

if ($operacao == "agendamento"){

  $agendamento = $_REQUEST["agendamento"];
  $cod_agendamento = $_REQUEST["cod_agendamento"];

  $sql = "UPDATE agendamento SET cod_cliente = NULL, nome_cliente = NULL WHERE cod_agendamento = '$cod_agendamento'";  
  mysqli_query($mysqli,$sql);

  $sql= "SELECT * FROM agendamento WHERE cod_agendamento = '$agendamento'";
  $res= mysqli_query($mysqli,$sql);
  $var= mysqli_fetch_array($res);

  $sql = "SELECT * FROM cliente WHERE email = '$email'";
  $res = mysqli_query($mysqli,$sql);
  $cliente = mysqli_fetch_array($res);

  $cod_cliente = $cliente["matricula"];

  $nome_cliente = $cliente['nome'];

  $sql = "UPDATE agendamento SET cod_cliente = '$cod_cliente', nome_cliente = '$nome_cliente'";
  $sql .= "WHERE cod_agendamento = '$agendamento'";  
  mysqli_query($mysqli,$sql);

  $_SESSION['mensagem_agendamento'] = "<div class='alert alert-success'>Sua consulta com o serviço ".utf8_encode($var['servico'])." foi reagendada para o dia ".date('d/m/Y', strtotime($var['dia']))." às ".$var['hora']." com sucesso!</div>";

  header("Location: calendario_cliente.php");

}

?>