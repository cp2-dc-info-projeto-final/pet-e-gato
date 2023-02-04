<?php

session_start();
include "autentica.php";
include "conecta_mysql.php";

$cod_agendamento = $_REQUEST['cod_agendamento'];

$sql = "SELECT * FROM agendamento WHERE cod_agendamento = $cod_agendamento";
$res= mysqli_query($mysqli,$sql);
$var= mysqli_fetch_array($res);

$nome_funcionario = utf8_encode($var["funcionario"]);
$nome_cliente = utf8_encode($var["nome_cliente"]);
$servico = utf8_encode($var["servico"]);
$dia = date('d/m/Y', strtotime($var["dia"]));
$hora = $var["hora"];

$cod_cliente = $var["cod_cliente"];
$cod_funcionario = $var["cod_funcionario"];

$sql = "SELECT * FROM cliente WHERE matricula = '$cod_cliente'";
$res= mysqli_query($mysqli,$sql);
$cliente= mysqli_fetch_array($res);

$email_cliente = $cliente["email"];

$sql = "SELECT * FROM funcionario WHERE matricula = '$cod_funcionario'";
$res= mysqli_query($mysqli,$sql);
$funcionario= mysqli_fetch_array($res);

$email_funcionario = $funcionario["email"];

include "envia_email.php";
    $para = $email_cliente;
    $assunto = utf8_decode("Agendamento cancelado! | Pet&Gatô");
    $mensagem = utf8_decode("<h2><u>Olá $nome_cliente!</u></h2> <br> <small>Cliente Pet&Gatô</small> <br> <h3>O serviço de <b>$servico</b> no dia <b>$dia</b> às <b>$hora</b> com o (a) funcionário (a) <b>$nome_funcionario</b> foi cancelado com sucesso.</h3> <br> <b><small>Pet&Gatô House</small></b>");
    envia_email($para, $assunto, $mensagem);

    $para = $email_funcionario;
    $assunto = utf8_decode("Agendamento cancelado! | Pet&Gatô");
    $mensagem = utf8_decode("<h2><u>Olá $nome_funcionario!</u></h2> <br> <small>Funcionário Pet&Gatô</small> <br> <h3>O serviço de <b>$servico</b> no dia <b>$dia</b> às <b>$hora</b> foi cancelado pelo cliente <b>$nome_cliente</b>.</h3> <br> <b><small>Pet&Gatô House</small></b>");
    envia_email($para, $assunto, $mensagem);

$sql = "DELETE FROM agendamento WHERE cod_agendamento = $cod_agendamento;";
mysqli_query($mysqli,$sql);


$sql = "UPDATE agendamento SET cod_cliente = NULL, nome_cliente = NULL WHERE cod_agendamento = '$cod_agendamento'";
$_SESSION['mensagem_agendamento'] = "<div class='alert alert-success'>Agendamento cancelado!</div>";

header ('location: calendario_cliente.php');

mysqli_close($mysqli);

?>