<?php
    session_start();
    if(isset($_SESSION["email"])){
        $email = $_SESSION["email"];
    }

    if(isset($_SESSION["senha"])){
        $senha = $_SESSION["senha"];
    }

    if(empty($email) or empty($senha)){
        header("Location: login.php");
        exit;
    }

    else{
        $mysqli = mysqli_connect("localhost","administrador","2122","pet_e_gato"); 
        $sql = "SELECT * FROM cliente WHERE email = '$email';";
        $res = mysqli_query($mysqli, $sql);

        //testa se não encontrou o email no banco de dados 

        if(mysqli_num_rows($res) != 1){
            unset($_SESSION["email"]);
            unset($_SESSION["senha"]);
            header("Location: agendamento.php");
            exit;
        }

        else{
            $cliente = mysqli_fetch_array($res);
            // Testa se a senha está errada
            if ($senha != $cliente["senha"]){
                unset($_SESSION["email"]);
                unset($_SESSION["senha"]);
                header("Location: agendamento.php");
                exit;

            }
        }
        mysqli_close($mysqli);
    }
?>