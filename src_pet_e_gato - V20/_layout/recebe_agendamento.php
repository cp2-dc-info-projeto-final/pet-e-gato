<?php include "autentica.php" ?>

<?php

include "conecta_mysql.php";
    
$operacao = $_POST["operacao"];

if ($operacao == "agendamento"){

    $cpf = utf8_decode($_POST["cpf"]);
    $nome = utf8_decode($_POST["nome"]); 
    $email = utf8_decode($_POST["email"]);
    $servico = utf8_decode($_POST["servico"]);
    $hora = utf8_decode($_POST["hora"]);
    $data = utf8_decode($_POST["data"]);

$sql= "SELECT * FROM agendamento";
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
      }

}

   