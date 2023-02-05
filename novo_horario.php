<?php 

include "autentica.php";
include "conecta_mysql.php";

$sql = "SELECT * FROM cliente WHERE email = '$email'";
$res= mysqli_query($mysqli,$sql);
$cliente = mysqli_fetch_array ($res);

?>

<!doctype html>
<html lang="pt-br">
  <head>
    <title>Reagendamento | Pet&Gatô</title>
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
        
        <h3 class="text-center mb-4">Reagendar consulta</h3>

          <fieldset>
          
            <legend>Informações do agendamento</legend>

            <?php
       
              if(isset($_SESSION['mensagem_agendamento'])){
                  echo $_SESSION['mensagem_agendamento'];
                  unset($_SESSION['mensagem_agendamento']);
                }

              $cod_agendamento = $_REQUEST["cod_agendamento"];

            ?>
            
            <form action="recebe_novohorario.php" method="POST" class="login-form"> 
            <input type="hidden" name="operacao" value="agendamento">
            <input type="hidden" name="cod_cliente" value="<?php echo $cliente['matricula']?>">
            <input type="hidden" name="cod_agendamento" value="<?php echo $cod_agendamento ?>"> 

                <div class="form-group">
                <label for="hora">Escolha uma nova data e novo um horário:</label>
		      			<select name="agendamento" required="required" class="form-control rounded-left">
                            
                            <?php

                            $sql= "SELECT * FROM agendamento WHERE cod_agendamento = '$cod_agendamento'";
                            $res= mysqli_query($mysqli,$sql);
                            $agendamento= mysqli_fetch_array($res);

                            $cod_servico= $agendamento["cod_servico"];

                            $sql= "SELECT * FROM agendamento WHERE cod_servico = '$cod_servico' ORDER BY dia ASC";
                            $res= mysqli_query($mysqli,$sql);
                            $linhas= mysqli_num_rows($res);

                            if($linhas > 1){

                              echo "<option value=''>Data e Horário</option>";

                              for ($i = 0; $i < $linhas; $i++){
                                  $servico = mysqli_fetch_array ($res);

                                if(empty($servico['cod_cliente'])){ 

                                    echo"
                                    <option value=".$servico['cod_agendamento'].">".date('d/m/Y', strtotime($servico['dia'])).' - '.$servico['hora']."</option>";

                                }
                              }
                            }
                            if ($linhas <= 1){
                              echo "<option value=''>*Nenhum horário disponível</option>";
                            }

                           ?>
                        </select>
		      		</div>

	            <div class="form-group d-md-flex">
	            	<div class="w-50">
									</label>
								
                </div>
                <div class="form-group container">
                  <button class="btn btn-dark rounded text-md-flex"><a href="calendario_cliente.php">Voltar</a></button>	
                </div>
	            </div>

	            <div class="form-group">
	            	<button type="submit" class="btn btn-primary rounded submit p-3 px-5">Reagendar</button>
	            </div>

	          </form>
	        </div>
				      </div>
			    </div>
		</div>
	</section>
</body>    
</html>

