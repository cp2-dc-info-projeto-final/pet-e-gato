<!doctype html>
<html lang="pt-br">
  <head>
    <title>Cadastro de serviços | Pet&Gatô</title>
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
        
        <h3 class="text-center mb-4">Cadastro de Serviços</h3>
          <fieldset>
          
            <legend>Informações do novo serviço</legend>
            
            <form action="servicos_cadastrados.php" method="POST" class="login-form"> 
            <input type="hidden" name="operacao" value="cliente">
		      		
            <div class="form-group">
                <label for="nome">Digite o novo serviço:</label>
		      			<input type="text" name="servico" class="form-control rounded-left" placeholder="Digite o novo serviço" required autofocus pattern="[A-Za-z ']{10,}" title="O nome precisa ter pelo menos 10 caracteres">
		      		</div>
              <div class="form-group">
                <label for="email">Descreva o novo serviço:</label>
		      			<input type="text" name="descricao" class="form-control rounded-left" placeholder="Digite a descrição do serviço" required="required">
		      		</div>
              <label for="email">Valor do serviço:</label>
	            <div class="form-group d-flex">
	              <input type="text" name="preco" class="form-control rounded-left" placeholder="Digite o preço do serviço" required="required" required maxlength="50" minlength="1">
	            </div>
          </fieldset>
	            <div class="form-group d-md-flex">
	            	<div class="w-50">		
                </div>
                
					<div class="form-group container">
                  <button class="btn btn-dark rounded text-md-flex"><a href="index-adm.php">Voltar</a></button>
									
					</div>
	            </div>

	            <div class="form-group">
	            	<button type="submit" class="btn btn-primary rounded submit p-3 px-5">Salvar alterações</button>
	            </div>
	          </form>
	        </div>
				      </div>
			    </div>
		</div>
	</section>
</body>    
</html>