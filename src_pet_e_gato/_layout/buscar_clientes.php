<?php include "conecta_mysql.inc" ?>

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
  </head>
  <body>

    <div id="header">
        <div class="container">
          <nav class="navbar navbar-expand-lg navbar-light justify-content-between">
              
              <a class="navbar-brand" href="#"></a>
              <a href="index.php"><img src="_img/logo_petgato.png" class="img-center" width="50%"/></a>
              
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
                    <a class="nav-link active" aria-current="page" href="index.php"> Início</a>
                  </li>

                  <li class="nav-item">
                    <a class="nav-link" href="servicos.php">Serviços</a>
                  </li>

                  <li class="nav-item">
                    <a class="nav-link" href="cadastro_servicos.php">Cadastro de Serviços</a>
                  </li>

                  <li class="nav-item">
                    <a class="nav-link" href="clientes.php">Clientes</a>
                  </li>

                  <li class="nav-item">
                    <a class="nav-link" href="funcionario.php">Funcionários</a>
                  </li>

                  <li class="nav-item">
                    <a class="nav-link" href="cadastro_funcionario.php">Cadastro de Funcionários</a>
                  </li>

                  <li class="nav-item">
                    <a class="nav-link" href="#">Contato</a>
                  </li>

                  <li class="nav-item">
                    <a class="nav-link" href="#">Sobre</a>
                  </li>

                  <li class="nav-item">
                    <a class="nav-link" href="logout.php">Fazer logout</a>
                  </li>
                </ul>
              </div>
          </nav>
        </div>
    </div>

    <div class="buscar">
      <form action="buscar_clientes.php" method="POST" class="buscar">
          <input name="nome" id="search-input" type="search" id="form1" class="form-control rounded-left w-5 container" placeholder="Buscar">
          <input type="hidden" name="operacao" value="buscar">
          <button  type="submit" class="btn btn-dark mx-0 container">Enviar</button>
          <i class="fas fa-search"></i>
      </form>
    </div>

    <div class="container
    ">
                <section class="intro ">
                    <div class="gradient-custom-1 h-100">
                        <div class="mask d-flex align-items-center h-100">
                        <div class="container"> 
                            <div class="row justify-content-center">
                            <div class="col-12">
                                <div class="table-responsive bg-white table table-bordered" style="margin: 50px auto;"> 
                                <table class="table mb-0  table-striped" table="center">
                                    <thead class="color">
                                    <tr>
                                      <th scope="col">NOME</th>
                                      <th scope="col">EMAIL</th>
                                      <th scope="col">DATA_NASC</th>
                                      <th scope="col">TELEFONE</th>
                                      <th scope="col">NOME_PET</th>
                                      <th scope="col">NASC_PET</th>
                                    </tr>
                                    </thead>
                                    <tbody>

                                    <?php
                                    include "conecta_mysql.inc";

                                    $operacao = $_REQUEST ["operacao"];
                                            
                                    if($operacao== "buscar"){
                                        $nome = $_POST["nome"];
                                        $sql= "SELECT * FROM cliente WHERE nome like '%$nome%';";
                                        $res= mysqli_query($mysqli,$sql);
                                        $linhas= mysqli_num_rows($res);
                                            
                                        for ($i = 0; $i < $linhas; $i++){
                                        $cliente = mysqli_fetch_array ($res);

                                            echo"
                                            <tr>
                                            <td>".$cliente['nome']."</td>
                                            <td>".$cliente['email']."</td>
                                            <td>".$cliente['data_nasc']."</td>
                                            <td>".$cliente['telefone']."</td>
                                            <td>".$cliente['nome_pet']."</td>
                                            <td>".$cliente['nasc_pet']."</td>
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
  </body>
</html>
