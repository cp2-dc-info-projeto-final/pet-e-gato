<?php
    include "../_bd/conexao.php";
    include "envia-email.php";
    session_start();
    $_SESSION['rec'] = 1; 
    
    
    $operacao = $_POST['operacao'];
    
    if ($operacao == 'enviar-email'){
        $email = $_POST['emailrec'];
        
        $sql = "SELECT * FROM cliente WHERE email = '$email';";
        $res = mysqli_query($mysqli, $sql);
        $linhas1 = mysqli_num_rows($res);

        $sql2 = "SELECT * FROM funcionario WHERE email = '$email';";
        $res2 = mysqli_query($mysqli, $sql2);
        $linhas2 = mysqli_num_rows($res2);

        $sql3 = "SELECT * FROM administrador WHERE email = '$email';";
        $res3 = mysqli_query($mysqli, $sql3);
        $linhas3 = mysqli_num_rows($res3);
                            
        if ($linhas1 == 1){
            $role = "cliente";
        }
        else if($linhas2 == 1){
            $role = "funcionario";
        }
        else if($linhas3 == 1){
            $role = "administrador";
        }
        else{
            $_SESSION["erro-rec"] = true;
            header("Location: recuperar-senha.php");
        }
        
        $id = "id_"."$role";

        $sql4 = "SELECT * FROM $role WHERE email = '$email';";
        $res4 = mysqli_query($mysqli, $sql4);
        $buscasql = mysqli_fetch_array($res4);
        
        $id_usuario = $buscasql[$id];
        $_SESSION['usuario'] = $buscasql['email'];
        $_SESSION['id_usuario'] = $id_usuario;

        $codigorec = mt_rand(100000, 999999);

        $sql5 = "SELECT * FROM codigos WHERE id_usuario = $id_usuario AND role_usuario = '$role';";
        $res5 = mysqli_query($mysqli, $sql5);
        $linhas4 = mysqli_num_rows($res5);
        
        $assuntoemail = "Recuperação de conta";
        $mensagememail = "O código para recuperação da sua conta é $codigorec";

        envia_email($email, $assuntoemail, $mensagememail);

        if ($linhas4 == 1){
            $sql6 = "UPDATE codigos SET codigo_rec = $codigorec WHERE id_usuario = $id_usuario AND role_usuario = '$role'";
            mysqli_query($mysqli,$sql6);
            header('Location: recuperar-senha-cod.php');
        }
        else{
            $sql7 = "INSERT INTO codigos (codigo_rec, id_usuario, role_usuario) VALUES ($codigorec, $id_usuario,'$role');";
            mysqli_query($mysqli,$sql7);
            header('Location: recuperar-senha-cod.php');
        } 
    }
    
    if($operacao == 'enviar-codigo'){ 
        $codigo = $_POST['codigo'];
        $email = $_SESSION['usuario'];
        $id_usuario = $_SESSION['id_usuario'];

        $sql = "SELECT * FROM cliente WHERE email = '$email';";
        $res = mysqli_query($mysqli, $sql);
        $linhas1 = mysqli_num_rows($res);

        $sql2 = "SELECT * FROM funcionario WHERE email = '$email';";
        $res2 = mysqli_query($mysqli, $sql2);
        $linhas2 = mysqli_num_rows($res2);

        $sql3 = "SELECT * FROM administrador WHERE email = '$email';";
        $res3 = mysqli_query($mysqli, $sql3);
        $linhas3 = mysqli_num_rows($res3);
                            
        if ($linhas1 == 1){
            $role = "cliente";
        }
        else if($linhas2 == 1){
            $role = "funcionario";
        }
        else if($linhas3 == 1){
            $role = "administrador";
        }
        else{
            $_SESSION["erro-rec"] = true;
            header("Location: recuperar-senha-cod.php");
        }

        $_SESSION['role-usuario'] = $role;

        $sql4 = "SELECT * FROM codigos WHERE id_usuario = $id_usuario AND role_usuario = '$role';";
        $res4 = mysqli_query($mysqli, $sql4);
        $respostasql = mysqli_fetch_array($res4);
        $codigobd = $respostasql['codigo_rec'];
        
        if($codigo == $codigobd){
            header('Location: redefinir-senha.php');
        }
        else{
            $_SESSION["erro-rec"] = true;
            header("Location: recuperar-senha-cod.php");
        }
    }
?>