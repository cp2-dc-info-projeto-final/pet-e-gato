<?php

include_once 'conexao.php';

if (isset($_POST['alterar'])) {
	$email = $conn->escape_string($_POST['email']);

	if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
		$erro[] = "E-mail inválido";
		}

	$novasenha = substr(md5(time()), 0, 6);
	$novacriptograda = md5($novasenha);

	 if (count($erro) == 0) {
		$sql = "SELECT * FROM cliente WHERE email = '$email'";
		$res = $conn->query($sql);
		$row = $res->fetch_object();

		if ($res->num_rows > 0) {
			$sql = "UPDATE cliente SET senha = '$novacriptograda' WHERE email = '$email'";
			$res = $conn->query($sql);
			if ($res) {
				$para = $email;
				$assunto = "Alteração de Senha";
				$mensagem = "Sua nova senha é: $novasenha";
				$cabecalho = "From: $email";
				mail($para, $assunto, $mensagem, $cabecalho);
				print "<script>alert('Sua nova senha é: $novasenha');</script>";
				print "<script>location.href='index.php';</script>";
			} else {
				print "<script>alert('Erro ao alterar senha!');</script>";
				print "<script>location.href='alterar.php';</script>";
			}
		} else {
			print "<script>alert('E-mail não cadastrado!');</script>";
			print "<script>location.href='alterar.php';</script>";
		}
	 } else {
		foreach ($erro as $msg) {
			print "<script>alert('$msg');</script>";
		}
		print "<script>location.href='alterar.php';</script>";
	}

	 $email = $_POST['email'];
	 $senha = $_POST['senha'];
	 $sql = "UPDATE cliente SET senha = '$novacriptograda' WHERE email = '$email'";
	 $sql_query = $mysqli->query($sql) or die($mysqli->error);
	  if ($sql_query) {
	 	$to = $email;
	 	$subject = "Recuperação de senha";
		$message = "Sua nova senha é: " . $novasenha;
		$headers = "From: " . $email;
	 	$envio = mail($to, $subject, $message, $headers);
		if ($envio) {
	 		echo "Email enviado com sucesso!";
	 	} else {
			echo "Erro ao enviar email!";
	 	}
}
	 mail($email, "Sua nova senha", "Sua nova senha é: $novasenha");
	 print "<script>alert('Sua nova senha foi enviada para o seu e-mail.');</script>";

	 $res = $conn->query($sql);
	 if ($res) {
		 print "<script>alert('Senha alterada com sucesso!');</script>";
		  print "<script>location.href='index.php';</script>";
	 } else {
		 print "<script>alert('Erro ao alterar senha!');</script>";
		 print "<script>location.href='alterar.php';</script>";
	 } 

	 
?>



<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Sistema de Login</title>
		<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	</head>
	<body>
		<div class="container">
			<div class="row">
				<div class="col-lg-4 offset-lg-4 mt-5">
					<div class="card bg-light">
						<div class="card-body">
							<h5 class="card-title">Alterar senha</h5>
							<form method="POST" action="">
								<div class="mb-3">
									<input type="email" name="email" class="form-control" placeholder="E-mail" value="<?php if(isset($dados['email'])){echo $dados['email']; }?>">
								</div>
								<div class="mb-3">
									<button type="submit" class="btn btn-success" value="alterar" name='alterar'>Acesso</button>
								</div>
							</form>
							<br>
							Lembrou? <a href="index.php">clique aqui</a> para logar
						</div>
					</div>
				</div>
			</div>
		</div>
		<script src="js/bootstrap.bundle.min.js" type="text/javascript"></script>
	</body>

</html>