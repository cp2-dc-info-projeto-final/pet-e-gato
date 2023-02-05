<?php 

include "autentica.php";
include "conecta_mysql.php";

?>

<!doctype html>
<html lang="pt-br">

  <head>

    <title>Selecione um serviço | Pet&Gatô</title>
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <link rel="stylesheet" href="_css/main.css"/>
    <link rel="shortcut icon" href="_img/logo_petgato.png" type="image/x-icon" />
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" 
      integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    
      <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700;900&display=swap" rel="stylesheet">

      <script type="text/javascript" src="http://code.jquery.com/jquery-1.7.2.min.js"></script>
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
                    <a class="nav-link" href="#sobre">Sobre</a>
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
                                <div class="table-responsive bg-white table table-bordered" style="margin: 5px auto;"> 
                                <table class="table mb-0  table-hover table-bordered table-sm" id="tabela" table="center">
                                    <thead class="color thead-dark">
                                    <tr>
                                      <th scope="col">SERVIÇO</th>
                                      <th scope="col">PREÇO</th>
                                      <th scope="col">AGENDAR</th>
                                    </tr>
                                    </thead>
                                    <tbody>

                                    <?php
                                        $sql= "SELECT * FROM servicos";
                                        $res= mysqli_query($mysqli,$sql);
                                        $linhas= mysqli_num_rows($res);

                                        for ($i = 0; $i < $linhas; $i++){
                                            $servicos = mysqli_fetch_array ($res);

                                            echo"
                                            <tr>
                                            <td>".utf8_encode($servicos['servico'])."</td>
                                            <td>".$servicos['preco']."</td>
                                            <td><a class='btn btn-sm btn-primary' href='agendamento.php?cod_servico=$servicos[cod_servico]'>
                                            <img src='_img/agendar.svg' width='25'></a>
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

   


    <script src="js/bootstrap.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
  
<br>
<br>
<br>

  <!-- Footer -->
  <footer class="text-center text-lg-start bg-light text-muted" id="sobre">
<!-- Section: Social media -->
<section class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom">
</section>
<!-- Section: Social media -->

<!-- Section: Links  -->
<section class="">
  <div class="container text-center text-md-start mt-5">
    <!-- Grid row -->
    <div class="row mt-3">
      <!-- Grid column -->
      <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
        <!-- Content -->
        <h6 class="text-uppercase fw-bold mb-4"> 
          <i class="fas fa-gem me-3"> <img src="_img/diamond.png" class="img-fluid" ></i> Pet&Gatô House
        </h6>
        <p>
          Desde 2016, a Pet&Gatô nasceu com o objetivo de melhorar a vida dos tutores e seus pets fornecendo agendamento de atendimento com a pontualidade que só a nossa empresa oferece para os clientes. Além disso, utilizamos produtos de excelente qualidade e um ambiente acolhedor para que o seu pet fique confortável e cheiroso.
          
        </p>
      </div>
      <!-- Grid column -->

      <!-- Grid column -->
      <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
        <!-- Links -->
        <h6 class="text-uppercase fw-bold mb-4">
          Acesso ao site
        </h6>
        <p>
          <a href="servicos_cliente.php" class="text-reset">Serviços</a>
        </p>
        <p>
          <a href="#!" class="text-reset">Sobre</a>
        </p>
        
      </div>
      <!-- Grid column -->

      

      <!-- Grid column -->
      <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
        <!-- Links -->
        <h6 class="text-uppercase fw-bold mb-4" >Contato</h6>
        <p> <img src="_img/home (1).png" class="img-fluid" ><i class="fas fa-home me-3"></i> Rua Manoel Gomes, 20 - Duque de Caxias- Rj </p>
        <p> <img src="_img/mail.png" class="img-fluid" >
          <i class="fas fa-envelope me-3"></i>
          petegatooficial1@gmail.com
        </p>
        <p ><img src="_img/phone (1).png" class="img-fluid" ><i class="fas fa-phone me-3"></i> (21) 94002-8922</p>
        <p><img src="_img/phone (1).png" class="img-fluid" ><i class="fas fa-print me-3"></i> (21) 97683-9732</p>
      </div>
      <!-- Grid column -->
    </div>
    <!-- Grid row -->
  </div>
</section>
<!-- Section: Links  -->

<!-- Copyright -->
<div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.05);">
  © 2022 Copyright:
  <a class="text-reset fw-bold" href="index-inicial.php">Pet&Gatô - House</a>
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