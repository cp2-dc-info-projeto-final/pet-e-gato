<?php   include "autentica-adm.php";
        include "conecta_mysql.php";
?>

<!doctype html>
<html lang="pt-br">
  <head>
    <title>Cadastrar horário | Pet&Gatô</title>
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
		      <span class="fa fa-calendar"></span>
		    </div>
        
        <h3 class="text-center mb-4">Cadastro de horário</h3>

          <fieldset>
          
            <legend>Informações do cadastro</legend>

            <?php
       
              if(isset($_SESSION['mensagem_agendamento'])){
                  echo $_SESSION['mensagem_agendamento'];
                  unset($_SESSION['mensagem_agendamento']);
                }
            ?>
            
            <form action="recebe_horario.php" method="POST" class="login-form"> 
            <input type="hidden" name="operacao" value="agendamento">
		      		
            <div class="form-group">
                <label for="nome">Escolha o serviço:</label>
                <select name="servico" required="required" class="form-group">
            <option value="">Nome do Serviço</option>
            <?php

              $sql= "SELECT * FROM servicos";
              $res= mysqli_query($mysqli,$sql);
              $linhas= mysqli_num_rows($res);

              for ($i = 0; $i < $linhas; $i++){
                  $servico = mysqli_fetch_array ($res);

                if(isset($servico['cod_servico'])){
                  echo"
                  <option value=".$servico['cod_servico'].">".$servico['servico']."</option>";

                }
              }

              ?>
            </select>
		      		</div>

            <label for="cpf">Funcionário responsável:</label>
              <div class="form-group d-flex">
                <select name="funcionario" required="required" class="form item">
            <option value="">Nome do funcionário</option>
            <?php

              $sql= "SELECT * FROM funcionario";
              $res= mysqli_query($mysqli,$sql);
              $linhas= mysqli_num_rows($res);

              for ($i = 0; $i < $linhas; $i++){
                  $funcionario = mysqli_fetch_array ($res);

                if(isset($funcionario['matricula'])){
                  echo"
                  <option value=".$funcionario['matricula'].">".$funcionario['nome']."</option>";

                }
              }

              ?>
            </select>
              </div>

                <div class="form-group">
                <label for="hora">Escolha um horário:</label>
		      			<input type="time" name="hora" class="form-control rounded-left" placeholder="Escolha um horário">
		      		</div>

              <div class="form-group">
                <label for="data">Escolha uma data:</label>
		      			<input type="date" name="dia" class="form-control rounded-left" placeholder="Escolha uma data">
		      		</div>
          </fieldset>

	            <div class="form-group d-md-flex">
	            	<div class="w-50">
									</label>
								
                </div>
                <div class="form-group container">
                  <button class="btn btn-light rounded text-md-flex"><a href="index-inicial.php">Voltar</a></button>	
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

