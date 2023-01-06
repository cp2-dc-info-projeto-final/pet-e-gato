<?php include "conecta_mysql.php" ?>
<?php include "autentica-adm.php" ?>

<!doctype html>
<html lang="pt-br">
  <head>
    <title>Funcionários | Pet&Gatô</title>
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
              <a href="index-adm.php" ><img src="_img/logo_petgato.png" class="img-center" width="25%"/></a>
              
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
                    <a class="nav-link" href="clientes.php">Clientes</a>
                  </li>

                  <li class="nav-item">
                    <a class="nav-link" href="funcionario.php">Funcionários</a>
                  </li>

                  <ul class="navbar-nav nav-item mr-auto">
                          <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> Cadastrar</a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                              <a class="dropdown-item" href="cadastro_servicos.php">Serviços</a>
                              <a class="dropdown-item" href="cadastro_funcionario.php">Funcionários</a>
                              <a class="dropdown-item" href="cadastro_adm.php">Administrador</a>
                            </div>
                          </li>
                  </ul>
                 

                  <li class="nav-item">
                    <a class="nav-link" href="#">Contato</a>
                  </li>

                  <li class="nav-item">
                    <a class="nav-link" href="#">Sobre</a>
                  </li>

                  <li class="nav-item">
                    <a class="nav-link" href="logout-adm.php">Sair</a>
                  </li>
 
                   </ul>
              </div>
          </nav>
        </div>
    </div>


    <div class="container">
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
                                      <th scope="col">MATRÍCULA</th>
                                      <th scope="col">NOME</th>
                                      <th scope="col">E-MAIL</th>
                                      <th scope="col">NASCIMENTO</th>
                                      <th scope="col">ESPECIALIDADE</th>
                                      <th scope="col">EDITAR</th>
                                      <th scope="col">EXCLUIR</th>
                                    </tr>
                                    </thead>
                                    <tbody>

                                    <?php
                                        $mysqli = mysqli_connect("localhost","administrador","2122","pet_e_gato");
                                        $sql= "SELECT * FROM funcionario";
                                        $sql= "SELECT matricula, nome, email, data_nasc, especialidade FROM funcionario ORDER BY matricula;";
                                        $res= mysqli_query($mysqli,$sql);
                                        $linhas= mysqli_num_rows($res);

                                        for ($i = 0; $i < $linhas; $i++){
                                            $funcionario = mysqli_fetch_array ($res);

                                            echo"
                                            <tr>
                                            <td>".$funcionario['matricula']."</td>
                                            <td>".utf8_encode($funcionario['nome'])."</td>
                                            <td>".$funcionario['email']."</td>
                                            <td>".$funcionario['data_nasc']."</td>
                                            <td>".utf8_encode($funcionario['especialidade'])."</td>
                                            <td><a class='btn btn-sm btn-primary' href='altera_funcionario.php?matricula=$funcionario[matricula]'>
                                                <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-pencil' viewBox='0 0 16 16'><path d='M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z'/>
                                                </svg>
                                                </a>
                                            </td>
                                            <td><a class='btn btn-sm btn-danger' href='excluir_funcionario.php?matricula=$funcionario[matricula]'>
                                                <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-trash' viewBox='0 0 16 16'><path d='M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z'/><path fill-rule='evenodd' d='M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z'/>
                                                </svg>
                                                </a>
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
  </body>
</html>