<?php 
    session_start();
?>
<!doctype html>
<html lang="pt-br">
  <head>
  	<title>Esqueci a senha | Pet&Gatô</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link rel="shortcut icon" href="_img/logo_petgato.png" type="image/x-icon" />

	<link rel="stylesheet" href="_css/style.css">

	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

	</head>

	<body class="fadeIn">

        <section class="ftco-section">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-6 text-center mb-5">
                        <h2 class="heading-section">Recuperação de Senha</h2>
                    </div>
                </div>

                <div class="row justify-content-center">
                    <div class="col-md-6 col-lg-5">
                        <div class="login-wrap p-4 p-md-5">
                    <div class="icon d-flex align-items-center justify-content-center">
                        <span class="fa fa-user-o"></span>
                    </div>

                    <h3 class="text-center mb-4">Insira seu email abaixo.</h3>
                    <form action="recebe_rs.php" method="POST" class="needs-validation"  novalidate>
                            <div>
                                <input type="hidden" name="operacao" value="enviar-email">
                                <input type="email" class="form-control rounded-left" id="emailrec" name="emailrec" placeholder="Email" required>
                                <div class="invalid-feedback">
                                    Por favor, preencha seu email.
                                </div>
                            </div>
                            <?php if(isset($_SESSION["erro-rec"])){echo "<div class=alert alert-danger mt-3' id='alert' class='mr-auto'>Email não cadastrado.</div>";}
                            unset($_SESSION["erro-rec"])?> 
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary rounded submit p-3 px-5">Continuar</button>
                            </div>
                        </form>
                    </div>
                </div>
                <script src="../_js/validacao.js"></script>
        </section>
    </body>
</html>
