<?php include "autentica-adm.php" ?>

<!doctype html>
<html lang="pt-br">
  <head>
    <title>Cadastro de funcionário | Pet&Gatô</title>
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
		      <span class="fa fa-users"></span>
		    </div>
        
			<h3 class="text-center mb-4">Cadastro de funcionário</h3>
          <fieldset>
          
            <legend>Informações do funcionário</legend>
            
            <form action="funcionarios_cadastrados.php" method="POST" class="login-form"> 
            <input type="hidden" name="operacao" value="funcionario">

			    <?php
					if(isset($_SESSION['mensagem_erro'])){
						echo $_SESSION['mensagem_erro'];
						unset($_SESSION['mensagem_erro']);
					}
				?>
		      		
			<label for="nome">Digite seu nome:</label>
            <div class="form-group label-float">
		      	<input type="text" name="nome" class="form-control rounded-left" placeholder="Digite seu nome completo" required="true" autofocus pattern="[A-Za-zÀ-ú ']{10,}" title="O nome precisa ter pelo menos 10 caracteres">
						  
				<small class="text-black-100">*Mínimo: 10 caracteres</small>
            </div>

              <br>

			<label for="email">Digite seu e-mail:</label>
			<div class="form-group label-float">
				<input type="email" name="email" class="form-control rounded-left" placeholder="Digite seu email" required="required">
						  
				<small class="text-black-100">Exemplo: petegato@gmail.com</small>
			</div>

              <br>

            <label for="cpf">CPF:</label>
            <div class="form-group d-flex label-float">
                <input type="text" class="form-control rounded-left" required="required" id="cpf" name="cpf" placeholder="Digite seu CPF">
              	<script type="text/javascript">$("#cpf").mask("000.000.000-00");</script>
              </div>

            <label for="email">Digite uma senha:</label>
	        <div class="form-group d-flex password label-float">
	            <input type="password" name="senha" class="form-control rounded-left" placeholder="Digite sua senha" required="required" required minlength="5">
				  
				<small class="text-black-100">*Mínimo: 5 caracteres</small>
	        </div>

              <br>

            <label for="email">Confirme a senha:</label>
	        <div class="form-group d-flex password label-float">
	            <input type="password" name="repetesenha" class="form-control rounded-left" placeholder="Digite a senha novamente" required="required" required minlength="5">
				  
				<small class="text-black-100">*Mínimo: 5 caracteres</small>
	        </div>

              <br>

            <label for="data_nasc">Data de Nascimento:</label>
            <div class="form-group d-flex label-float password">
                <input type="date" class="form-control rounded-left" required="required" id="data_nasc" name="data_nasc" max="<?php echo date("Y-m-d", strtotime('-18year')); ?>">

				<small class="text-black-100">*Idade mínima: 18 anos</small>
            </div>

			  <br>
          
          </fieldset>

			<div class="w-50 text-md-left">
				<a style="color: #570070" href="funcionario.php">→ Funcionários</a>
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