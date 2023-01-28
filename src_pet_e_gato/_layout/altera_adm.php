<?php 
     include "conecta_mysql.php";

     $matricula = $_GET ["matricula"];
     $sql= "SELECT * FROM administrador WHERE matricula = $matricula;";
     $res= mysqli_query($mysqli,$sql);
     $administrador = mysqli_fetch_array ($res);
?>

<!doctype html>
<html lang="pt-br">
  <head>
    <title>Editar administrador | Pet&Gatô</title>
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

            <h3 class="text-center mb-4">Editar administrador</h3>

              <fieldset>

                <legend>Informações do administrador</legend>

            <form action="editar_adm.php" method="POST">
                <input type="hidden" name="operacao_editar" value="editar">
                <input type="hidden" name="matricula" value="<?php echo $matricula?>">

                <div class="form-group">
                    <label for="nome">Digite o nome do administrador:</label>
                    <input type="text" required="required" class="form-control rounded-left" name="nome" placeholder="Nome Completo" value="<?php echo $administrador['nome']?>">
                </div>

                <div class="form-group">
                  <label for="nome">Digite o e-mail do administrador:</label>
                    <input type="email" required="required" class="form-control rounded-left" name="email" placeholder="E-mail" value="<?php echo $administrador['email']?>">
                </div>

                <script> 

                  function ocultar() {
                    var marcados = document.querySelector("input[type=radio]:checked");
                    var botao = document.getElementById("botao");
                    botao.style.display = (marcados != null) ? "block" : "none";
                  }

                  function fechar(){
                    let modal = document.querySelector('.fechar')
                    modal.style.display ='none'
                  }

                </script>

                <div class="form-group">
                    <label>Deseja criar uma nova senha?</label>
                    
                    <div class="form-check">
                      <input class="form-check-input" onclick="ocultar()" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                      <label class="form-check-label" for="flexRadioDefault1">
                        SIM
                      </label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" onclick="fechar()" type="radio" name="flexRadioDefault" id="flexRadioDefault2">
                      <label class="form-check-label" for="flexRadioDefault2">
                        NÃO
                      </label>
                    </div>
                
                </div>

                <div class="form-group">
                    <input type="password" id="botao" style="display:none" class="form-control rounded-left fechar" name="senha" placeholder="Digite a nova senha" maxlength="8" minlength="5">
                </div>

                <div class="form-group">
                <label for="nome">Digite a data de nascimento do administrador:</label>
                    <input type="date" required="required" class="form-control rounded-left" name="data_nasc" placeholder="Data de Nascimento" value="<?php echo $administrador['data_nasc']?>">
                </div>

              </fieldset>

              <div class="form-group d-md-flex">
	            	<div class="w-50">
									</label>
								
                </div>
								<div class="form-group container">
                  <button class="btn btn-light rounded text-md-flex"><a href="administradores.php">Voltar</a></button>	
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