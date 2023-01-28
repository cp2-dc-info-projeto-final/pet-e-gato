<?php

include "autentica.php";
include "conecta_mysql.php";

$sql = "SELECT * FROM cliente WHERE email = '$email';";
$res = mysqli_query($mysqli,$sql);
$cliente = mysqli_fetch_array ($res);

        if(!mysqli_query($mysqli,$sql)){
            echo mysqli_error($mysqli);
            exit;
        }
?>

<!doctype html>
<html lang="pt-br">

  <head>

    <title>Meu perfil</title>
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <link rel="stylesheet" href="_css/main.css" href="_css/style.css"/>
    <link rel="shortcut icon" href="_img/logo_petgato.png" type="image/x-icon" />
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" 
      integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700;900&display=swap" rel="stylesheet">

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
  
  </head>

  <body class="fadeIn">

  <div id="header">
        <div class="container">
          <nav class="navbar navbar-expand-lg navbar-light justify-content-between">
              
              <a class="navbar-brand" href="#"></a>
              <a href="index.php"><img src="_img/logo_petgato.png" class="img-center" width="18%"/></a>
              
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
                    <a class="nav-link active" aria-current="page" href="index-inicial.php"> Início</a>
                  </li>

                  <li class="nav-item">
                    <a class="nav-link" href="servicos_cliente.php">Serviços</a>
                  </li>

                  <li class="nav-item">
                    <a class="nav-link" href="agendamento.php">Agendamento</a>
                  </li>

                  <li class="nav-item">
                    <a class="nav-link" href="calendario_cliente.php">Calendário</a>
                  </li>

                  <li class="nav-item">
                    <a class="nav-link" href="contato-cliente.php">Contato</a>
                  </li>

                  <li class="nav-item">
                    <a class="nav-link" href="perfil_cliente.php">Perfil</a>
                  </li>

                  <li class="nav-item">
                    <a class="nav-link" href="logout.php"> Sair </a>

                </ul>
              </div>
          </nav>
        </div>
    </div>

<div class="container rounded bg-white mt-5">
        <div class="row">
            <div class="col-md-4 border-right">
                <div class="d-flex flex-column align-items-center text-center p-3 py-5"><img class="rounded-circle mt-5" src="_img/perfil-cliente.gif" width="90%"><span class="font-weight-bold"><?php echo $cliente['nome']?></span><span class="text-black-50"><?php echo $cliente['email']?></span><span><?php echo $cliente['cpf']?></span></div>
                </div>
                <div class="col-md-8">
                <div class="p-3 py-5">

                <form id="formenviar" action="editar_cliente.php" method="POST" class="login-form" style="_css/style.css">
                  <input type="hidden" name="operacao_editar" value="editar">
                  <input type="hidden" name="email" value="<?php echo $email?>">

                  <?php
                    if(isset($_SESSION['msg_rec'])){
                      echo $_SESSION['msg_rec'];
                      unset($_SESSION['msg_rec']);
                    }
                  ?>

                    <fieldset>

                    <legend>Informações do tutor</legend>

                <div class="form-group">

                    <div class="form-group d-flex">
                        <div class="col-md-12"><input type="text" name="nome" class="form-control rounded-left" placeholder="Nome Completo" value="<?php echo $cliente['nome']?>"></div>
                    </div>

                    <div class="form-group d-flex">
                      <div class="col-md-6"><input type="text" name="endereco" class="form-control rounded-left" placeholder="Endereço" value="<?php echo $cliente['endereco']?>"></div>
                      <div class="col-md-6"><input type="text" name="telefone" class="form-control rounded-left" value="<?php echo $cliente['telefone']?>" placeholder="Telefone"></div>
                    </div>

                    <div class="form-group d-flex">
                    <div class="col-md-12"><input type="email" name="email" class="form-control rounded-left" placeholder="Email" value="<?php echo $cliente['email']?>"></div>
                    </div>

                    <div class="form-group d-flex">
                        <div class="col-md-6"><input type="date" name="data_nasc" class="form-control rounded-left" placeholder="Data de Nascimento" value="<?php echo $cliente['data_nasc']?>"></div>
                        <div class="col-md-6"><input type="text" name="cpf" class="form-control rounded-left" value="<?php echo $cliente['cpf']?>" placeholder="CPF"></div>
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

                  <div class="form-group container">
                    <label>Deseja criar uma nova senha?</label>
                    
                    <div class="form-check checkyes">
                      <input class="form-check-input" onclick="ocultar()" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                      <label class="form-check-label" for="flexRadioDefault1">
                        SIM
                      </label>
                    </div>
                    <div class="form-check checkno">
                      <input class="form-check-input" onclick="fechar()" type="radio" name="flexRadioDefault" id="flexRadioDefault2">
                      <label class="form-check-label" for="flexRadioDefault2">
                        NÃO
                      </label>
                    </div>
                
                </div>

                <div class="form-group d-flex container">
                    <input type="password" id="botao" style="display:none" class="form-control rounded-left fechar" name="senha" placeholder="Digite a nova senha" maxlength="8" minlength="5">
                </div>
                
                

                    <fieldset>
                        
                        <legend>Informações do PET</legend>

                        <div class="form-group d-flex">
                            <div class="col-md-6"><input type="text" name="nome_pet" class="form-control rounded-left" placeholder="Nome do seu PET" value="<?php echo utf8_encode($cliente['nome_pet'])?>"></div>
                            <div class="col-md-6"><input type="date" name="nasc_pet" class="form-control rounded-left" value="<?php echo $cliente['nasc_pet']?>"></div>
                        </div>
                    </fieldset>
                </form>

                <form id="formexcluir" action="excluirperfil_cliente.php" method="POST">
                <input type="hidden" name="matricula" value="<?php echo $cliente["matricula"]?>">
                </form>

                <div class="row mt-2 form-group"> 
                  <div class="col-md-6"><button form="formenviar" class="btn btn-primary rounded submit p-2 px-4 profile-button" type="submit" value="Salvar alterações" name="submit">Salvar alterações</button></div>
                      
                      
                  <div class="col-md-6"><a data-toggle="modal" data-target="#exampleModal" class="btn btn-danger rounded submit p-2 px-4 profile-button">Excluir conta</a></div>
                    

                  <!-- Modal -->
                  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalLabel">Confirmação</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          </button>
                        </div>
                        <div class="modal-body">
                          Você deseja realmente excluir sua conta?
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-primary" data-dismiss="modal">Cancelar</button>
                          <button form="formexcluir" type="submit" value="Excluir conta" name="Excluir conta" type="button" class="btn btn-danger">Excluir conta</button>
                        </div>
                      </div>
                    </div>
                </div>
            </div>
        </div>

</body>
</html>