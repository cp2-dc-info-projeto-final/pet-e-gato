<?php 

include "autentica-funcionario.php";
include "conecta_mysql.php";

?>

<!doctype html>
<html lang="pt-br">
  <head>
    <title>Agendamentos | Pet&Gatô</title>
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
    <script type="text/javascript" src="http://code.jquery.com/jquery-1.7.2.min.js"></script>
  </head>
  <body class="fadeIn">


  <div id="header">
        <div class="container">
          <nav class="navbar navbar-expand-lg navbar-light justify-content-between">
              
              <a class="navbar-brand" href="#"></a>
              <a href="index-func.php"><img src="_img/logo_petgato.png" class="img-center" width="10%"/></a>
              
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
                    <a class="nav-link active" aria-current="page" href="index-func.php"> Início</a>
                  </li>

                  <li class="nav-item">
                    <a class="nav-link" href="calendario_func.php">Calendário</a>
                  </li>

                  <li class="nav-item">
                    <a class="nav-link" href="perfil_funcionario.php">Perfil</a>
                  </li>

                  <li class="nav-item">
                    <a class="nav-link" href="logout-funcionario.php"> Sair </a>
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
                            <div class="table-responsive bg-white table table-bordered" style="margin: 5px auto;"> 
                                <table class="table mb-0  table-hover table-bordered table-sm" id="tabela" table="center">
                                    <thead class="color thead-dark">
                                    <tr>
                                      <th scope="col">DATA</th>
                                      <th scope="col">HORA</th>
                                      <th scope="col">CLIENTE</th>
                                      <th scope="col">SERVIÇO</th>
                                    </tr>
                                    </thead>
                                    <tbody>

                                    <?php
                                        $sql = "SELECT * FROM funcionario WHERE email = '$email'";
                                        $res= mysqli_query($mysqli,$sql);
                                        $funcionario = mysqli_fetch_array ($res);

                                        $matricula = $funcionario['matricula'];

                                        $sql = "SELECT * FROM agendamento WHERE cod_funcionario = '$matricula' ORDER BY dia ASC";
                                        $res= mysqli_query($mysqli,$sql);
                                        $linhas= mysqli_num_rows($res);

                                        for ($i = 0; $i < $linhas; $i++){
                                            $agendamento = mysqli_fetch_array ($res);

                                          if(isset($agendamento['cod_cliente'])){   

                                            echo"
                                            <tr>
                                            <td>".date('d/m/Y', strtotime($agendamento['dia']))."</td>
                                            <td>".$agendamento['hora']."</td>
                                            <td>".utf8_encode($agendamento['nome_cliente'])."</td>
                                            <td>".utf8_encode($agendamento['servico'])."</td>
                                            </tr>";
                                          }   
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
<div class="text-center p-4 rodapeposicao-func" style="background-color: rgba(0, 0, 0, 0.05);">
  © 2023 Copyright:
  <a class="text-reset fw-bold" href="index-func.php">Pet&Gatô - House</a>
</div>
<!-- Copyright -->
</footer>
<!-- Footer -->

<a href="#" class="topo-link">&#9650;</a>

</body>

<script> 
  
      jQuery(document).ready(function() {
                // Exibe ou oculta o botão
                jQuery(window).scroll(function() {
                    if (jQuery(this).scrollTop() > 200) {
                        jQuery('.topo-link').fadeIn(200);
                    } else {
                        jQuery('.topo-link').fadeOut(200);
                    }
                });
                
                // Faz animação para subir
                jQuery('.topo-link').click(function(event) {
                    event.preventDefault();
                    jQuery('html, body').animate({scrollTop: 0}, 300);
                })
            });

</script>


</html>