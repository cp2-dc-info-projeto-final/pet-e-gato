<!doctype html>
<html lang="pt-br">
  <head>
  	<title>Login | Pet&Gatô</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link rel="shortcut icon" href="_img/logo_petgato.png" type="image/x-icon" />

	<link rel="stylesheet" href="_css/style.css">

	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

	</head>

	<body class="fadeIn">

	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-6 text-center mb-5">
					<h2 class="heading-section">Fazer login como cliente</h2>
				</div>
			</div>

			<div class="row justify-content-center">
				<div class="col-md-6 col-lg-5">
					<div class="login-wrap p-4 p-md-5">
		      	<div class="icon d-flex align-items-center justify-content-center">
		      		<span class="fa fa-user-o"></span>
		      	</div>

		      	<h3 class="text-center mb-4">Já tem uma conta?</h3>
				<form action="recebe_login.php" method="POST" class="login-form">

				<?php

					session_start();
					if(isset($_SESSION['mensagem_erro'])){
						echo $_SESSION['mensagem_erro'];
						unset($_SESSION['mensagem_erro']);
					}

			
                    if(isset($_SESSION['msg_rec'])){
                        echo $_SESSION['msg_rec'];
                        unset($_SESSION['msg_rec']);
                    }
				?>

		      		<div class="form-group label-float">
		      			<input type="email" name="email" class="form-control rounded-left" placeholder="Digite seu email" required>
		      		</div>

	            <div class="form-group d-flex label-float">
	              <input type="password" name="senha" class="form-control rounded-left" placeholder="Digite sua senha" required minlength="5">
	            </div>

	            <div class="form-group d-md-flex">
					<a class="links" href="cadastro_cliente.php">Cadastrar-me</a>
					<a class="w-25">‎</a>
					<a class="links pl-5" href="recuperar-senha.php">Esqueci a senha</a>
	            </div>
	            <div class="form-group">
	            	<button type="submit" class="btn btn-primary rounded submit p-3 px-5">Login</button>
	            </div>

	          </form>
	        </div>
				</div>
			</div>
		</div>
	</section>
</body>
</html>



 