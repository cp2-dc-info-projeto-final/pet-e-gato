<?php

include "autentica.php";
include "conecta_mysql.php";
    
$operacao = $_POST["operacao"];

if ($operacao == "agendamento"){

  $cod_agendamento = $_REQUEST["agendamento"];

  $sql = "SELECT * FROM cliente WHERE email = '$email'";
  $res = mysqli_query($mysqli,$sql);
  $cliente = mysqli_fetch_array($res);

  $cod_cliente = $cliente["matricula"];

  $nome_cliente = $cliente['nome'];

  $sql = "UPDATE agendamento SET cod_cliente = '$cod_cliente', nome_cliente = '$nome_cliente'";
  $sql .= "WHERE cod_agendamento = '$cod_agendamento'";  
  mysqli_query($mysqli,$sql);

  header("Location: calendario_cliente.php");

/*$sql= "SELECT * FROM agendamento";
$res= mysqli_query($mysqli,$sql);
$linhas= mysqli_num_rows($res);


for ($i = 0; $i < $linhas; $i++){
    $agendamento = mysqli_fetch_array ($res);
    
    if($agendamento['dia'] == $data){

      if ($agendamento ['servico'] == $servico){
        if ($agendamento['hora'] == $hora){
          $_SESSION['mensagem_agendamento'] = "<div class='alert alert-danger'>Horário Indisponível</div>";
          header("Location: agendamento.php");
          exit;
  }
 }
 }
}


$sql = "SELECT * FROM cliente WHERE email = '$email';";
$res= mysqli_query($mysqli,$sql);
$cliente = mysqli_fetch_array ($res);

    if($cliente ['nome'] != $nome){

      $_SESSION['mensagem_agendamento'] = "<div class='alert alert-danger'>O nome não corresponde ao cadastrado.</div>";
      header("Location: agendamento.php");
      exit;
}

    if($cliente ['cpf'] != $cpf){

      $_SESSION['mensagem_agendamento'] = "<div class='alert alert-danger'>O CPF não corresponde ao cadastrado.</div>";
      header("Location: agendamento.php");
      exit;
}

    if($cliente ['email'] != $email){

      $_SESSION['mensagem_agendamento'] = "<div class='alert alert-danger'>O email não corresponde ao cadastrado.</div>";
      header("Location: agendamento.php");
      exit;
}

                               

    $sql = "INSERT INTO agendamento (cpf, nome, email, servico, hora, dia) VALUES ('$cpf','$nome', '$email', '$servico', '$hora', '$data');";
    mysqli_query($mysqli,$sql);

    $_SESSION['mensagem_agendamento'] = "<div class='alert alert-success' role='alert'> Agendamento realizado!</div>";
    header("Location: agendamento.php");

      if(!mysqli_query($mysqli,$sql)){
          echo mysqli_error($mysqli);
      }*/

}
