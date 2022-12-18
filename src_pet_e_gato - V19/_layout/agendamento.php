<?php include "autentica.php" ?>

<!doctype html>
<html lang="pt-br">
  <head>
    <title>Agendamento | Pet&Gatô</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="_css/style.css">

    <link rel="shortcut icon" href="_img/logo_petgato.png" type="image/x-icon" />
    
	  <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

	  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.11/jquery.mask.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"></script>
    <script src='https://www.google.com/recaptcha/api.js'></script>

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
		      <span class="fa fa-calendar"></span>
		    </div>
        
        <h3 class="text-center mb-4">Agendamento de serviço</h3>

          <fieldset>
          
            <legend>Informações do agendamento</legend>

            <?php
       
              if(isset($_SESSION['mensagem_agendamento'])){
                  echo $_SESSION['mensagem_agendamento'];
                  unset($_SESSION['mensagem_agendamento']);
                }
            ?>
            
            <form action="recebe_agendamento.php" method="POST" class="login-form"> 
            <input type="hidden" name="operacao" value="agendamento">
		      		
            <div class="form-group">
                <label for="nome">Digite seu nome:</label>
		      			<input type="text" name="nome" class="form-control rounded-left" placeholder="Digite seu nome completo" required autofocus pattern="[A-Za-z ']{10,}" title="O nome precisa ter pelo menos 10 caracteres">
		      		</div>

            <label for="cpf">CPF:</label>
              <div class="form-group d-flex">
                <input type="text" class="form-control rounded-left" required="required" id="cpf" name="cpf" placeholder="Digite seu CPF">
              <script type="text/javascript">$("#cpf").mask("000.000.000-00");</script>
              </div>

              <div class="form-group">
                <label for="email">Digite seu e-mail:</label>
		      			<input type="email" name="email" class="form-control rounded-left" placeholder="Digite seu email" required="required">
		      		</div>

              <label for="servico">Tipo de serviço:</label>
              <div class="form-group">
                <select id="inputAgendamento" class="form-control" name="servico">
                    <option selected></option>
                    <option>Tosa</option>
                    <option>Banho</option>
                    <option>Banho e Tosa</option>
                    <option>Corte de unha</option>
                    <option>Higiênica</option>
                    <option>Banho com higiênica</option>
                    <option>Clubinho</option>
                </select>    
                </div>

                <div class="form-group">
                <label for="hora">Escolha um horário:</label>
		      			<input type="time" name="hora" class="form-control rounded-left" placeholder="Escolha um horário">
		      		</div>

              <div class="form-group">
                <label for="data">Escolha uma data:</label>
		      			<input type="date" name="data" class="form-control rounded-left" placeholder="Escolha uma data">
		      		</div>
          </fieldset>

	            <div class="form-group d-md-flex">
	            	<div class="w-50">
									</label>
								
                </div>
								<div class="w-30 text-md-flex container">
									<a class="links" href="index-inicial.php">Voltar para a página inicial</a>
                  <style>
                     .links {
                        color: #570070;
                     }
									</style>
								</div>
	            </div>

              <div class="g-recaptcha" data-sitekey="6Ld6iPkaAAAAACbmLsA8N9xo03pp6O6t-d_vp9pm"></div>

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

