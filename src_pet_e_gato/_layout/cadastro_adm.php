<?php include "autentica-adm.php" ?>

<!doctype html>
<html lang="pt-br">
  <head>
    <title>Cadastro de administrador | Pet&Gatô</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link rel="stylesheet" href="_css/style.css">
	
    <link rel="shortcut icon" href="_img/logo_petgato.png" type="image/x-icon" />
    
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
				</div>
			</div>

			<div class="row justify-content-center">
				<div class="col-md-6 col-lg-5">
					<div class="login-wrap p-4 p-md-5">
		    <div class="icon d-flex align-items-center justify-content-center">
		      <span class="fa fa-user-o"></span>
		    </div>
        
        <h3 class="text-center mb-4"></h3>

          <fieldset>
          
            <legend>Cadastro de Administrador </legend>
            
            <form action="adms_cadastrados.php" method="POST" class="login-form"> 
            <input type="hidden" name="operacao" value="administrador">

			<?php

            session_start();
              if(isset($_SESSION['mensagem_erro'])){
                echo $_SESSION['mensagem_erro'];
                unset($_SESSION['mensagem_erro']);
              }
            ?>
		      		
            <div class="form-group">
                <label for="nome">Digite seu nome:</label>
		      			<input type="text" name="nome" class="form-control rounded-left" placeholder="Digite seu nome completo" required autofocus pattern="[A-Za-zÀ-ú ']{10,}" title="O nome precisa ter pelo menos 10 caracteres">
		      		</div>

              <div class="form-group">
                <label for="email">Digite seu e-mail:</label>
		      			<input type="email" name="email" class="form-control rounded-left" placeholder="Digite seu email" required="required">
		      		</div>

              <label for="email">Digite uma senha:</label>
	            <div class="form-group d-flex">
	              <input type="password" name="senha" class="form-control rounded-left" placeholder="Digite sua senha" required="required" required maxlength="8" minlength="5">
	            </div>

              <label for="email">Digite novamente sua senha:</label>
	            <div class="form-group d-flex">
	              <input type="password" name="repetesenha" class="form-control rounded-left" placeholder="Digite sua senha novamente" required="required" required maxlength="8" minlength="5">
	            </div>

              <label for="data_nasc">Data de Nascimento:</label>
              <div class="form-group d-flex">
                <input type="date" class="form-control rounded-left" required="required" id="data_nasc" name="data_nasc">
              </div>
          
          </fieldset>

          	<div class="form-group d-md-flex">
				<div class="w-50 text-md-right">
					<a href="index-adm.php">Voltar para o dashboard</a>
				</div>
	    	</div>

				<div class="form-group d-md-flex">
	            	<div class="w-50">		
                </div>
                
	            </div>

	            <div class="form-group">
	            	<button type="submit" class="btn btn-primary rounded submit p-3 px-5">Cadastrar</button>
	            </div>

	          </form>
	        </div>
				      </div>
			    </div>
		</div>
	</section>
</body>    
</html>