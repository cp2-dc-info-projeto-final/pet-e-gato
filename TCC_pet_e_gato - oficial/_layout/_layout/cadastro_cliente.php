<html>
<head>
    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="_css/main.css"/>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.11/jquery.mask.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="_css/main.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"></script>
    <title>Cadastre-se - Pet&Gatô</title>
    
</head>
    
<body>
    <div id="header">
        <div class="container">
          <nav class="navbar navbar-expand-lg navbar-light justify-content-between">
              <a class="navbar-brand" href="#"></a>
              <a href="index.php"><img src="_img/logo_petgato.png" class="img-center" width="10%"/></a>
              <button 
                class="navbar-toggler" 
                type="button" 
                data-bs-toggle="collapse" 
                data-bs-target="#navbarNav" 
                aria-controls="navbarNav" 
                aria-expanded="false" 
                aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="index.php">Início</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">Serviços</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="clientes.php">Clientes</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">Contato</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">Sobre</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="cadastro_cliente.html">Cadastre-se</a>
                  </li>
                  </ul>
              </div>
          </nav>
        </div>
    </div>
    
    <form action="usuarios_cadastrados.php" method="POST" class="w-50 p-3 table-bordered"> 
            <input type="hidden" name="operacao" value="cliente">
        
        <h1>Cadastre-se</h1>
        
        <fieldset>
          
          <legend><span class="number">1</span>  Suas Informações</legend>
          
          <label for="nome">Nome:</label>
          <input required autofocus pattern="[A-Za-z ']{10,}" title="O nome precisa ter pelo menos 10 caracteres" type="text" id="nome" name="nome" 
            placeholder="Digite seu nome completo com pelo menos 10 caracteres">
          <label for="email">Email:</label>
          <input type="email" required="required" id="email" name="email" placeholder="Digite seu melhor e-mail">
          <div class="row">
            <div class="col">
          <label for="senha">Digite uma senha:</label>
          <input type="password"  required="required" required maxlength="8" minlength="5" id="senha" name="senha" placeholder="Mínimo 5 caracteres">
            </div>
            <div class="col">
          <label for="repetirsenha">Repita sua senha:</label>
          <input type="password"  required required maxlength="8" minlength="5" id="repetirsenha" name="repetirsenha" placeholder="Repita sua senha">
            </div>
          </div>
          <label for="data_nasc">Data de Nascimento:</label>
          <input type="date"  required="required" id="data_nasc" name="data_nasc">
          <label for="endereco">Endereço:</label>
          <input type="text"  required="required" id="endereco" name="endereco" placeholder="Digite seu endereço">
            </div>
          <div class="row">
            <div class="form-group col-md-6">
          <label for="cpf">CPF:</label>
          <input type="text"  required="required" id="cpf" name="cpf" placeholder="Digite seu CPF">
          <script type="text/javascript">$("#cpf").mask("000.000.000-00");</script>
            </div>
            <div class="form-group col-md-6">
          <label for="telefone">Telefone:</label>
          <input type="tel"  required="required" id="telefone" name="telefone" placeholder="Seu número de telefone">
          <script type="text/javascript">$("#telefone").mask("(00) 00000-0000");</script>
            </div>
          </div>
          
        
        </fieldset>
        
        <fieldset>
          
          <legend><span class="number">2</span>  Informações do Pet</legend>
          <div class="row">
            <div class="form-group col-md-6">
          <label for="nome_pet">Nome do pet:</label>
          <input type="text" required="required" id="nome_pet" name="nome_pet" placeholder="Nome do seu PET">
            </div>
    
            <div class="form-group col-md-6">
          <label for="nasc_pet">Data de Nascimento:</label>
          <input type="date" required="required" id="nasc_pet" name="nasc_pet">
            </div> 
          </div>
        </fieldset>
          
        <button type="submit">Enviar</button>
        
      </form>
    </body>    
</html>
CADASTRO DE SERVIÇOS
LOGIN 
SESSÃO