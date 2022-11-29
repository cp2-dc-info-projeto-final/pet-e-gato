<?php 
    $mysqli = mysqli_connect("localhost","administrador","2122","pet_e_gato");
     $matricula = $_GET ["matricula"];
     $sql= "SELECT * FROM funcionario WHERE matricula = $matricula;";
     $res= mysqli_query($mysqli,$sql);
     $funcionario = mysqli_fetch_array ($res);
?>

<!doctype html>
<html lang="pt-br">
  <head>
    <title>Editar funcionário | Pet&Gatô</title>
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

<body>

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

            <h3 class="text-center mb-4">Cadastre-se</h3>

              <fieldset>

                <legend>Informações do funcionário</legend>

            <form action="editar_funcionario.php" method="POST">
                <input type="hidden" name="operacao_editar" value="editar">
                <input type="hidden" name="matricula" value="<?php echo $matricula?>">

                <div class="form-group">
                    <label for="nome">Digite o nome do funcionário:</label>
                    <input type="text" required="required" class="form-control rounded-left" name="nome" placeholder="Nome Completo" value="<?php echo $funcionario['nome']?>">
                </div>

                <div class="form-group">
                  <label for="nome">Digite o e-mail do funcionário:</label>
                    <input type="email" required="required" class="form-control rounded-left" name="email" placeholder="E-mail" value="<?php echo $funcionario['email']?>">
                </div>

                <div class="form-group">
                <label for="nome">Digite a data de nascimento do funcionário:</label>
                    <input type="date" required="required" class="form-control rounded-left" name="data_nasc" placeholder="Data de Nascimento" value="<?php echo $funcionario['data_nasc']?>">
                </div>

                <div class="form-group">
                    <label for="nome">O funcionário é um administrador?</label>
                    <input type="text" required="required" class="form-control rounded-left" name="ADM" placeholder="ADM" value="<?php echo $funcionario['ADM']?>">
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