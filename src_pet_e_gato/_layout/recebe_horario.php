<?php

include "autentica-adm.php";
include "conecta_mysql.php";

date_default_timezone_set('America/Argentina/Buenos_Aires');
 
 $matricula = utf8_decode($_POST["funcionario"]); 
 $cod_servico = utf8_decode($_POST["servico"]);
 
 $sql= "SELECT * FROM funcionario WHERE matricula = '$matricula'";
 $res= mysqli_query($mysqli,$sql);
 $funcionario = mysqli_fetch_array($res);

 $sql= "SELECT * FROM servicos WHERE cod_servico = '$cod_servico'";
 $res= mysqli_query($mysqli,$sql);
 $servico = mysqli_fetch_array($res);

    
$operacao = $_POST["operacao"];

if ($operacao == "agendamento"){

    $hora = $_POST["hora"];
    $dia = $_POST["dia"];
    $nome_funcionario = $funcionario["nome"];
    $nome_servico = $servico["servico"];

    $data = date_create()->format('Y-m-d');
    $horario = date_create()->format('H:i');

    if($dia < $data){
        $_SESSION['mensagem_agendamento'] = "<div class='alert alert-danger'>A data ".date('d/m/Y', strtotime($dia))." é inválida. Escolha a data atual ou posterior para cadastrar.</div>";
        header("Location: cadastrar_horario.php");
        exit;
    }

    if($data == $dia){
      if($hora < $horario){
  
          $_SESSION['mensagem_agendamento'] = "<div class='alert alert-danger'>O horário ".$hora." é inválido. Escolha o horário atual ou posterior para cadastrar.</div>";
          header("Location: cadastrar_horario.php");
          exit;
      }

    }

$sql= "SELECT * FROM agendamento";
$res= mysqli_query($mysqli,$sql);
$linhas= mysqli_num_rows($res);

for ($i = 0; $i < $linhas; $i++){
    $agendamento = mysqli_fetch_array ($res);
    
    if($agendamento['dia'] == $dia){

      if ($agendamento ['cod_servico'] == $servico['cod_servico']){
        if ($agendamento['hora'] == $hora){
            if ($agendamento['cod_funcionario'] == $funcionario['matricula']){
          $_SESSION['mensagem_agendamento'] = "<div class='alert alert-danger'>Funcionário indisponível!</div>";
          header("Location: cadastrar_horario.php");
          exit;
            }   
        }
        }
    }
}
                               

    $sql = "INSERT INTO agendamento (funcionario, cod_funcionario, servico, cod_servico, hora, dia) VALUES ('$nome_funcionario','$matricula', '$nome_servico', '$cod_servico', '$hora', '$dia');";
    mysqli_query($mysqli,$sql);

    $_SESSION['mensagem_agendamento'] = "<div class='alert alert-success' role='alert'> Horário cadastrado!</div>";
    header("Location: cadastrar_horario.php");

}
   