<html>
<head>
    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="_css/main.css"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"></script>
    <title>Cadastre-se - Pet&Gatô</title>
    
</head>
    
<body>


    <div id="header">
        <div class="container">
          <nav class="navbar navbar-expand-lg navbar-light justify-content-between">
              <a class="navbar-brand" href="#"></a>
              <a href='index.html'><img src="_img/logo_petgato.png" class="img-center" width="10%"/></a>
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
                    <a class="nav-link active" aria-current="page" href="index.html"> Início</a>
                  </li>

                  <li class="nav-item">
                    <a class="nav-link" href="#">Serviços</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">Portfólio</a>
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
    
        
<div class="container text-center">
            <h1 class="display-4"><abbr title="HyperText Markup Language" class="initialism">CADASTRE-SE</abbr></h1>
        </div>
        
        <div class="registration-form">
        <form action="funcionarios_cadastrados.php" method="POST"> 
            <input type="hidden" name="operacao" value="funcionario">

            <div class="container">
                <h3 class="display-8">Informações do funcionário</h3>
            </div>

                
                <div class="container">
                    <div class="my-3">
                        <label class="form-label">Nome:</label>
                        <input class="form-control" type="text" name="nome" required="required"/>
                        <small class="text-form text-muted">Digite seu nome completo</small>
                    </div>
                </div>

                <div class="container">
                    <div class="my-3">
                        <label class="form-label">E-mail:</label>
                        <input class="form-control" type="text" name="email" required="required"/>
                        <small class="text-form text-muted">Digite seu email completo</small>
                    </div>
                </div>

                <div class="container">
                    <div class="my-3">
                        <label class="form-label">Senha:</label>
                        <input class="form-control" type="password" name="senha" required="required"/>
                        <small class="text-form text-muted">Digite uma senha</small>
                    </div>
                </div>

                <div class="container">
                    <div class="my-3">
                        <label class="form-label">Repita sua senha:</label>
                        <input class="form-control" type="password" name="repetirsenha" required="required"/>
                        <small class="text-form text-muted">Digite sua senha novamente</small>
                    </div>
                </div>
                
                <div class="container">
                    <div class="my-3">
                        <label class="form-label">Data de Nascimento:</label> 
                        <input class="form-control" type="date" name="data_nasc" required="required"/>
                        <small class="text-form text-muted">Digite sua data de nascimento</small>
                    </div>
                </div>

                <div class="form-check container text-align">
                    <input type="checkbox" class="form-check-input" id="checkboxadm">
                    <label class="form-check-label" for="checkboxadm">Promover a administrador</label>
                </div>

                <div class="container">
                    <div class="my-3">
                        <input class="btn btn-primary create-account" type="submit" value="Enviar">
                    </div>
                </div>
        </form>
    
    </body>    
</html>