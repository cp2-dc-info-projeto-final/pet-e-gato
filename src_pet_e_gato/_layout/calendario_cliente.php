<?php 

include "autentica.php";
include "conecta_mysql.php";

?>


<!doctype html>
<html lang="pt-br">
  <head>
    <title>Calendário | Pet&Gatô</title>
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
              <a href="index-inicial.php"><img src="_img/logo_petgato.png" class="img-center" width="15%"/></a>
              
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
                    <a class="nav-link" href="seleciona_servico.php">Agendamento</a>
                  </li>

                  <li class="nav-item">
                    <a class="nav-link" href="calendario_cliente.php">Calendário</a>
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
                                
                                if(isset($_SESSION['mensagem_agendamento'])){
                                    echo $_SESSION['mensagem_agendamento'];
                                    unset($_SESSION['mensagem_agendamento']);
                                    }
                                ?>

                                <div class="table-responsive bg-white table table-bordered" style="margin: 5px auto;"> 
                                <table class="table mb-0  table-hover table-bordered table-sm" id="tabela" table="center">
                                    <thead class="color thead-dark">
                                    <tr>
                                      <th scope="col">DATA</th>
                                      <th scope="col">HORA</th>
                                      <th scope="col">SERVIÇO</th>
                                      <th scope="col">FUNCIONÁRIO</th>
                                      <th scope="col">REAGENDAR</th>
                                      <th scope="col">CANCELAR</th>
                                    </tr>
                                    </thead>
                                    <tbody>

                                    <?php
                                        $sql = "SELECT * FROM cliente WHERE email = '$email'";
                                        $res= mysqli_query($mysqli,$sql);
                                        $cliente = mysqli_fetch_array ($res);

                                        $cod_cliente = $cliente['matricula'];

                                        $sql = "SELECT * FROM agendamento WHERE cod_cliente = '$cod_cliente' ORDER BY dia ASC";
                                        $res= mysqli_query($mysqli,$sql);
                                        $linhas= mysqli_num_rows($res);

                                        for ($i = 0; $i < $linhas; $i++){
                                            $agendamento = mysqli_fetch_array ($res);

                                            echo"
                                            <tr>
                                            <td>".date('d/m/Y', strtotime($agendamento['dia']))."</td>
                                            <td>".$agendamento['hora']."</td>
                                            <td>".utf8_encode($agendamento['servico'])."</td>
                                            <td>".utf8_encode($agendamento['funcionario'])."</td>
                                            <td><a class='btn btn-sm btn-primary' href='novo_horario.php?cod_agendamento=$agendamento[cod_agendamento]'>
                                            <img src='_img/agendar.svg' width='25'></a>
                                            </td>
                                            <td><a class='btn btn-sm btn-danger' data-toggle='modal' data-target='#exampleModal'>
                                            <img src='_img/cancela.svg' width='25'></a>
                                            </td>
                                            </tr>";
                                            
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
                          Deseja realmente cancelar o agendamento?
                        </div>
                        <div class="modal-footer">
                          <input type="button" class="btn btn-primary" data-dismiss="modal" value="Voltar"></input>
                          <a <?php 

                          $sql = "SELECT * FROM agendamento WHERE cod_cliente = '$cod_cliente'";
                          $res= mysqli_query($mysqli,$sql);
                          $linhas= mysqli_num_rows($res);
                          
                          for ($i = 0; $i < $linhas; $i++){
                            $var = mysqli_fetch_array ($res);                            
                          echo "href='cancela_agendamento.php?cod_agendamento=$var[cod_agendamento]'"; } ?> value='Cancelar agendamento' name='Cancela agendamento' type='button' class='btn btn-danger'>Cancelar agendamento</a>
                          
                        
                        </div>
                      </div>
                    </div>
                </div>


            </div>
        </div>


    <script src="js/bootstrap.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
 

<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>

<!-- Copyright -->
<div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.05);">
  © 2022 Copyright:
  <a class="text-reset fw-bold" href="index-inicial.php">Pet&Gatô - House</a>
</div>
<!-- Copyright -->
</footer>
<!-- Footer -->

<a id="topo-link" href="#">&#9650;</a>

</body>

</html>