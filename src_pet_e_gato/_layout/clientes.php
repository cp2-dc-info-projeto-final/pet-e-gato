<?php 

include "autentica-adm.php"; 
include "conecta_mysql.php";

?>

<!doctype html>
<html lang="pt-br">
  <head>
    <title>Clientes | Pet&Gatô</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="_img/logo_petgato.png" type="image/x-icon" />
    <link rel="stylesheet" href="_css/main.css"/>
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
              <a href="index-adm.php" ><img src="_img/logo_petgato.png" class="img-center" width="15%"/></a>
              
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
                    <a class="nav-link active" aria-current="page" href="index-adm.php"> Início</a>
                  </li>

                  <li class="nav-item">
                    <a class="nav-link" href="servicos-adm.php">Serviços</a>
                  </li>

                  <li class="nav-item">
                    <a class="nav-link" href="calendario_adm.php">Calendário</a>
                  </li>

                  <ul class="navbar-nav nav-item mr-auto">
                          <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Empresa</a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                              <a class="dropdown-item" href="administradores.php">Administradores</a>
                              <a class="dropdown-item" href="clientes.php">Clientes</a>
                              <a class="dropdown-item" href="funcionario.php">Funcionários</a>
                            </div>
                          </li>
                  </ul>

                  <ul class="navbar-nav nav-item mr-auto">
                          <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> Cadastrar</a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                              <a class="dropdown-item" href="cadastro_servicos.php">Serviços</a>
                              <a class="dropdown-item" href="cadastrar_horario.php">Horários</a>
                              <a class="dropdown-item" href="cadastro_funcionario.php">Funcionários</a>
                              <a class="dropdown-item" href="cadastro_adm.php">Administrador</a>
                            </div>
                          </li>
                  </ul>

                  <li class="nav-item">
                    <a class="nav-link" href="perfil_adm.php">Perfil</a>
                  </li>

                  <li class="nav-item">
                    <a class="nav-link" href="logout-adm.php">Sair</a>
                  </li>
 
                   </ul>
              </div>
          </nav>
        </div>
    </div>

    <script>
      function myFunction() {
        var input, filter, table, tr, td, cell, i, j;
        input = document.getElementById("txt_consulta");
        filter = input.value.toUpperCase();
        table = document.getElementById("tabela");
        tr = table.getElementsByTagName("tr");

        for (i = 1; i < tr.length; i++) {
          tr[i].style.display = "none";
          td = tr[i].getElementsByTagName("td");

        for (var j = 0; j < td.length; j++) {
            cell = tr[i].getElementsByTagName("td")[j];
            if (cell) {
                if (cell.innerHTML.toUpperCase().indexOf(filter) > -1) {
                    tr[i].style.display = "";
                    break;
                } 
            }
          }
        }
      }
    </script>

      <div class="col-12 row d-flex justify-content-center">
        <span class="input-group-addon"><i class="glyphicon glyphicon-search"></i></span>
          <div class="form-outline w-75 p-3" style="margin: 20px auto;">
          <input name="consulta" id="txt_consulta" placeholder="Digite para iniciar a pesquisa" type="search" class="form-control d-flex" onkeyup="myFunction()">
          </div>
      </div>

    <div class="container">
                <section class="intro ">
                    <div class="gradient-custom-1 h-100">
                        <div class="mask d-flex align-items-center h-100">
                        <div class="container"> 
                            <div class="row justify-content-center">
                            <div class="col-12">

                            <?php
                              if(isset($_SESSION['msg_excluir'])){
                                echo $_SESSION['msg_excluir'];
                                unset($_SESSION['msg_excluir']);
                              }
                            ?>

                                <div class="table-responsive bg-white table table-bordered" style="margin: 5px auto;">
                                <table class="table mb-0  table-hover table-bordered table-sm" id="tabela" table="center">
                                    <thead class="color thead-dark">
                                    <tr>
                                      <th scope="col">NOME</th>
                                      <th scope="col">EMAIL</th>
                                      <th scope="col">DATA_NASC</th>
                                      <th scope="col">TELEFONE</th>
                                      <th scope="col">NOME_PET</th>
                                      <th scope="col">NASC_PET</th>
                                      <th scope="col">EXCLUIR</th>
                                    </tr>
                                    </thead>
                                    <tbody>

                                    <?php
                                        $sql= "SELECT * FROM cliente ORDER BY nome;";
                                        $res= mysqli_query($mysqli,$sql);
                                        $linhas= mysqli_num_rows($res);

                                        for ($i = 0; $i < $linhas; $i++){
                                            $cliente = mysqli_fetch_array ($res);

                                            echo"
                                            <tr>
                                            <td>".utf8_encode($cliente['nome'])."</td>
                                            <td>".$cliente['email']."</td>
                                            <td>".date('d/m/Y', strtotime($cliente['data_nasc']))."</td>
                                            <td>".$cliente['telefone']."</td>
                                            <td>".utf8_encode($cliente['nome_pet'])."</td>
                                            <td>".date('d/m/Y', strtotime($cliente['nasc_pet']))."</td>
                                            
                                            <td><a class='btn btn-sm btn-danger' data-toggle='modal' data-target='#modalexcluir$cliente[matricula]'>
                                                <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-trash' viewBox='0 0 16 16'><path d='M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z'/><path fill-rule='evenodd' d='M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z'/>
                                                </svg>
                                                </a>
                                            </td>

                                            </tr>

                                            <!-- Modal -->
                                            <div class='modal fade' id='modalexcluir$cliente[matricula]' tabindex='-1' role='dialog' aria-labelledby='exampleModalLabel' aria-hidden='true'>
                                                <div class='modal-dialog' role='document'>
                                                  <div class='modal-content modalcolor'>
                                                    <div class='modal-header'>
                                                      <h5 class='modal-title' id='exampleModalLabel'>Confirmação</h5>
                                                      <button type='button' class='close' data-dismiss='modal' aria-label='Close'>
                                                      </button>
                                                    </div>
                                                    <div class='modal-body'>
                                                      Deseja realmente excluir o cliente?
                                                    </div>
                                                    <div class='modal-footer'>
                                                      <input type='button' class='btn btn-primary' data-dismiss='modal' value='Voltar'></input>
                                                      <a href='excluir_adm.php?matricula=$cliente[matricula]' type='button' class='btn btn-danger'>Excluir</a>
                                                    </div>
                                                  </div>
                                                </div>
                                            </div>";
                                            
                                        }

                                    ?>
                                    
                                    </tbody>
                                </table>
                                </div>
                            </div>
                            </div>
                        </div>
                        </div>
                    </div>
                 </section>
                </div>

    <script src="js/bootstrap.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>


<!-- Copyright -->
<div class="text-center p-4 rodapeposicao" style="background-color: rgba(0, 0, 0, 0.05);">
  © 2023 Copyright:
  <a class="text-reset fw-bold" href="index-adm.php">Pet&Gatô - House</a>
</div>
<!-- Copyright -->
</footer>
<!-- Footer -->

<a id="topo-link" href="#">&#9650;</a>

</body>

</html>