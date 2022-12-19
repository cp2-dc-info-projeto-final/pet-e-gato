<?php 
    $mysqli = mysqli_connect("localhost","administrador","2122","pet_e_gato");
     $cod_agendamento = $_GET ["cod_agendamento"];
     $sql= "SELECT * FROM agendamento WHERE cod_agendamento = $cod_agendamento;";
     $res= mysqli_query($mysqli,$sql);
     $cliente = mysqli_fetch_array ($res);
?>

<!doctype html>
<html lang="pt-br">
  <head>
    <title>Editar agendamento | Pet&Gatô</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" href="_img/logo_petgato.png" type="image/x-icon" />
    
	  <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

	  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	
	  <link rel="stylesheet" href="_css/style.css">

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

            <h3 class="text-center mb-4">Edição de agendamento </h3>

              <fieldset>

                <legend>Informações do agendamento</legend>

            <form action="editar_agendamento.php" method="POST">
                <input type="hidden" name="operacao_editar" value="editar">
                <input type="hidden" name="cod_agendamento" value="<?php echo $cod_agendamento?>">

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
                    <option>Clubinho plus</option>
                </select>    
                </div>

                <div class="form-group">
                  <label for="nome">Digite a hora desejada:</label>
                    <input type="time" required="required" class="form-control rounded-left" name="hora" placeholder="Horario" value="<?php echo $cliente['hora']?>">
                </div>

                <div class="form-group">
                <label for="nome">Digite a data escolhida:</label>
                    <input type="date" required="required" class="form-control rounded-left" name="dia" placeholder="Data" value="<?php echo $cliente['dia']?>">
                </div>

              </fieldset>

              <div class="form-group d-md-flex">
	            	<div class="w-50">
									</label>
								
                </div>
								<div class="form-group container">
                  <button class="btn btn-light rounded text-md-flex"><a href="funcionario.php">Voltar</a></button>	
								</div>
	            </div>

	            <div class="form-group">
	            	<button type="submit" class="btn btn-primary rounded submit p-3 px-5">Salvar alterações</button>
	            </div>
            </form>

        </div>
    </div>


</body>
</html>