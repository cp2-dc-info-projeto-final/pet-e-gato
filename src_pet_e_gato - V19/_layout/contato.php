<!doctype html>
<html lang="pt-br">
  <head>
  	<title>Contato | Pet&Gatô</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link rel="shortcut icon" href="_img/logo_petgato.png" type="image/x-icon" />

	<link rel="stylesheet" href="_css/style.css">

	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.11/jquery.mask.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"></script>

	</head>
	<body class="fadeIn">
	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-6 text-center mb-5">
					<h2 class="heading-section">Fale conosco!</h2>
				</div>
			</div>

			<div class="row justify-content-center">
				<div class="col-md-6 col-lg-5">
					<div class="login-wrap p-4 p-md-5">
		      	<div class="icon d-flex align-items-center justify-content-center">
		      		<span class="fa fa-bullhorn"></span>
		      	</div>

		      	<h3 class="text-center mb-4">Preencha os campos abaixo</h3>
				
				<form action="recebe_contato.php" method="POST" class="login-form">
				<input type="hidden" name="operacao" value="contato">

				<?php

            	session_start();
              	if(isset($_SESSION['mensagem_sucesso'])){
                echo $_SESSION['mensagem_sucesso'];
                unset($_SESSION['mensagem_sucesso']);
              	}

            	?>
		      	
				<div class="form-group">
		      		<input type="text" name="nome" class="form-control rounded-left" placeholder="Digite seu nome" required>
		      	</div>

	            <div class="form-group d-flex">
	              <input type="email" name="email" class="form-control rounded-left" placeholder="Digite seu email" required>
	            </div>

				<div class="form-group d-flex">
					<input type="tel" name="telefone" id="telefone" class="form-control rounded-left" placeholder="Digite seu telefone" required>
				<script type="text/javascript">$("#telefone").mask("(00) 00000-0000");</script>
				</div>

				<div class="form-group d-flex">
					<label for="text-area">
    				<textarea class="form-control rounded-left" id="mensagem" rows="6" style="resize: none" name="mensagem" placeholder="Digite sua mensagem" required></textarea>
					</label>
				</div>

	            <div class="form-group">
	            	<button type="submit" id="enviar" class="btn btn-primary rounded submit p-3 px-5">Enviar</button>
	            </div>

	          </form>
	        </div>
				</div>
			</div>
		</div>
	</section>
</body>
</html>



 