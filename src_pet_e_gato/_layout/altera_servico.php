<?php 
    $mysqli = mysqli_connect("localhost","administrador","2122","pet_e_gato");
     $cod_servico = $_GET ["cod_servico"];
     $sql= "SELECT * FROM servicos WHERE cod_servico = $cod_servico;";
     $res= mysqli_query($mysqli,$sql);
     $servicos = mysqli_fetch_array ($res);
?>

<!doctype html>
<html lang="pt-br">
  <head>
    <title>Editar serviço | Pet&Gatô</title>
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
            <span class="fa fa-pencil"></span>
          </div>

            <h3 class="text-center mb-4">Alteração de serviço</h3>

              <fieldset>

                <legend>Informações do serviço</legend>

            <form action="editar_servico.php" method="POST">
                <input type="hidden" name="operacao_editar" value="editar">
                <input type="hidden" name="cod_servico" value="<?php echo $cod_servico?>">

                <label for="servico">Digite o nome do serviço:</label>
                <div class="form-group label-float">
                  <input type="text" required="required" class="form-control rounded-left" name="servico" placeholder="Digite o nome do serviço" value="<?php echo utf8_encode($servicos['servico'])?>">
                </div>

                <label for="textarea">Digite a descrição do serviço:</label>
                <div class="form-group label-float">
                  <textarea type="text" required="required" rows="6" style="resize: none" class="form-control rounded-left" name="descricao" placeholder="Digite a descrição"><?php echo utf8_encode($servicos['descricao'])?></textarea>
                </div>

                <label for="preco">Qual o preço do serviço:</label>
                <div class="form-group label-float">
                  <input type="text" name="preco" onkeypress="$(this).mask('R$ ###,##', {reverse: true});" class="form-control rounded-left" placeholder="Digite o preço do serviço" required="required" required maxlength="50" minlength="1" value="<?php echo $servicos['preco']?>">
                </div>

              </fieldset>

              <div class="form-group d-md-flex">
	            	<div class="w-50">
									</label>
								
                </div>
								<div class="form-group container">
                  <button class="btn btn-dark rounded text-md-flex"><a href="servicos-adm.php">Voltar</a></button>	
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