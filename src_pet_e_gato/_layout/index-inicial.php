<?php include "autentica.php" ?>


<!doctype html>
<html lang="pt-br">

  <head>

    <title>Início | Pet&Gatô</title>
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <link rel="stylesheet" href="_css/main.css"/>
    <link rel="shortcut icon" href="_img/logo_petgato.png" type="image/x-icon" />
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" 
      integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    
      <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700;900&display=swap" rel="stylesheet">
  </head>

  <body class="fadeIn">

    <div id="header">
        <div class="container">
          <nav class="navbar navbar-expand-lg navbar-light justify-content-between">
              
              <a class="navbar-brand" href="#"></a>
              <a href="index.php"><img src="_img/logo_petgato.png" class="img-center" width="15%"/></a>
              
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
                    <a class="nav-link" href="#rodape">Sobre</a>
                  </li>

                  <li class="nav-item">
                    <a class="nav-link" href="logout.php"> Sair </a>

                </ul>
              </div>
          </nav>
        </div>
    </div>

<div id="slider">
  <div class="container">
    <div class="row">
      <div class="col-md-6 align-self-center">
        <h1>O PetShop mais delicioso para o seu pet!</h1>
        <h4>Contrate já um de nossos serviços.</h4>
        <a href="#" class="btn btn-primary button">Contato</a>
        <a href="#" class="btn btn-outline-secondary button">Serviços</a>
      </div>
      <div class="col-md-6 align-self-center text-center">
        <img src="_img/pet_img.svg" class="img-fluid" alt="Um gatinho e um cachorrinho.">
      </div>
    </div>
  </div>
</div> 
<section class="ftco-section ftco-no-pt ftco-no-pb">
    	<div class="container">
    		<div class="row d-flex no-gutters">
    			<div class="col-md-5 d-flex">
    				<div class="img img-video d-flex align-self-stretch align-items-center justify-content-center justify-content-md-center mb-4 mb-sm-0" );>
            <img src="_img/Dog paw-bro.png" class="img-fluid"  height= "150" width="80%"alt="Um cachorrinho." >
    				</div>
    			</div>
    			<div class="col-md-7 pl-md-5 py-md-5">
    				<div class="heading-section pt-md-5">
	            <h2 class="mb-4">Por que nos escolher?</h2>
    				</div>
    				<div class="row">
	    				<div class="col-md-6 services-2 w-100 d-flex">
	    					<div class="icon d-flex align-items-center justify-content-center"><span class="flaticon-stethoscope"></span></div>
	    					<div class="text pl-3">
	    						<h4>Excelente atendimento</h4>
	    						<p>Nossa empresa oferece o melhor atendimento do Brasil, com opções de agendamento e horários flexíveis.</p>
	    					</div>
	    				</div>
	    				<div class="col-md-6 services-2 w-100 d-flex">
	    					<div class="icon d-flex align-items-center justify-content-center"><span class="flaticon-customer-service"></span></div>
	    					<div class="text pl-3">
	    						<h4>Melhores cuidados</h4>
	    						<p>Na Pet&Gatô House utilizamos produtos de qualidade para que o seu pet fique cheiroso e limpinho.</p>
	    					</div>
	    				</div>
	    				<div class="col-md-6 services-2 w-100 d-flex">
	    					<div class="icon d-flex align-items-center justify-content-center"><span class="flaticon-emergency-call"></span></div>
	    					<div class="text pl-3">
	    						<h4> Horário flexível</h4>
	    						<p>Oferecemos um horário flexível para facilitar a rotina de vida dos tutores e dos pets.</p>
	    					</div>
	    				</div>
	    				<div class="col-md-6 services-2 w-100 d-flex">
	    					<div class="icon d-flex align-items-center justify-content-center"><span class="flaticon-veterinarian"></span></div>
	    					<div class="text pl-3">
	    						<h4>Transporte a domicílio </h4>
	    						<p>Com o plano Clubinho (Plus), buscamos e levamos o pet em seu domicílio.</p>
	    					</div>
	    				</div>
	    			</div>
	        </div>
        </div>
    	</div>
    </section>
    <!-- Footer -->
<footer class="text-center text-lg-start bg-light text-muted" id="rodape">
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
            Desde 2016, a Pet&Gatô House foi criada com o objetivo de melhorar a vida dos tutores e seus pets fornecendo agendamento de atendimento com a pontualidade que só a nossa empresa oferece para os clientes. Além disso, utilizamos produtos de excelente qualidade e um ambiente acolhedor para que o seu pet fique confortável e cheiroso.
            
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
            <a href="servicos.php" class="text-reset">Serviços</a>
          </p>
          <p>
            <a href="contato-cliente.php" class="text-reset">Contato</a>
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
          <p> <img src="_img/home (1).png" class="img-fluid" ><i class="fas fa-home me-3"></i> Rua Manoel Gomes, 20 - Duque de Caxias- RJ </p>
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
    <a class="text-reset fw-bold" href="#">Pet&Gatô - House</a>
  </div>
  <!-- Copyright -->
</footer>

