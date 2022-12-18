<?php
    session_start();
    include "../_bd/conexao.php";

    $operacao = $_POST["operacao"];
    $usuario = $_POST['usuario'];    
    
    if(isset($_SESSION['cliente'])){
        if($usuario == "cliente"){
            if($operacao == "alterar"){
                $nome = $_POST["nome"]; 
                $email = $_POST["emailalterar"];
                $senha = $_POST["senhaalterar"];
                $confirmasenha = $_POST["confirmasenhaalterar"];  
                $id_cliente = $_SESSION['cliente'];
                    
                $sql = "SELECT * FROM cliente WHERE id_cliente = '$id_cliente';";
                $busca = mysqli_query($mysqli, $sql);
                $cliente = mysqli_fetch_array($busca);

                $sql = "SELECT * FROM cliente WHERE email = '$email';";
                $res = mysqli_query($mysqli, $sql);
                $linhas1 = mysqli_num_rows($res);

                $sql2 = "SELECT * FROM funcionario WHERE email = '$email';";
                $res2 = mysqli_query($mysqli, $sql2);
                $linhas2 = mysqli_num_rows($res2);

                $sql3 = "SELECT * FROM adm WHERE email = '$email';";
                $res3 = mysqli_query($mysqli, $sql3);
                $linhas3 = mysqli_num_rows($res3);
                
                $linhas = $linhas2 + $linhas3 + $linhas1;

                $erro = 0;
                
                if(strstr($email, '@') == false){
                    $_SESSION['na-alterar'] = "email";
                    header('Location: index.php');
                    $erro = 1;
                }
                else if(empty($nome) || empty($senha) || empty($confirmasenha) || empty($email)){
                    $_SESSION['na-alterar'] = "vazio";
                    header('Location: index.php');
                    $erro = 1; 
                }
                else if($senha != $confirmasenha || password_verify($senha, $cliente['senha']) == false){
                    $_SESSION['na-alterar'] = "senhas";
                    header('Location: index.php');
                    $erro = 1; 
                }
                else if($email != $cliente['email'] and $linhas >= 1){
                    $_SESSION['na-alterar'] = "alterar";
                    header('Location: index.php');
                }
                
                else{
                    $sql = "UPDATE cliente SET nome = '$nome', email = '$email' WHERE id_cliente = $id_cliente;";
                    mysqli_query($mysqli,$sql);
                    unset($_SESSION['na-alterar']);
                    header('Location: index.php');
                }
            }
            if($operacao == "excluir"){
                $id = $_SESSION['cliente'];
                $senha = $_POST["senhaexcluir"];
                $confirmasenha = $_POST["confirmasenhaexcluir"];

                if($senha != $confirmasenha){
                    $_SESSION['na-excluir'] = "senhas";
                    header('Location: index.php');
                }
                else if(empty($senha) || empty($confirmasenha)){
                    $_SESSION['na-excluir'] = "vazio";
                    header('Location: index.php');
                }
                else{
                    $sql = "DELETE FROM cliente WHERE id_cliente = $id;";
                    mysqli_query($mysqli,$sql); 
                    mysqli_close($mysqli);
                    header('Location: logout.php');
                }
            }
        }
    }
    
    if(isset($_SESSION['funcionario'])){
        if($usuario == "funcionario"){
            if($operacao == "alterar"){
                $nome = $_POST["nome"]; 
                $email = $_POST["emailalterar"];
                $senha = $_POST["senhaalterar"];
                $confirmasenha = $_POST["confirmasenhaalterar"];  
                $id_funcionario = $_SESSION['funcionario'];
                
                $sql = "SELECT * FROM funcionario WHERE id_funcionario = '$id_funcionario';";
                $busca = mysqli_query($mysqli, $sql);
                $funcionario = mysqli_fetch_array($busca);

                $sql = "SELECT * FROM funcionario WHERE email = '$email';";
                $res = mysqli_query($mysqli, $sql);
                $linhas1 = mysqli_num_rows($res);

                $sql2 = "SELECT * FROM cliente WHERE email = '$email';";
                $res2 = mysqli_query($mysqli, $sql2);
                $linhas2 = mysqli_num_rows($res2);

                $sql3 = "SELECT * FROM adiministrador WHERE email = '$email';";
                $res3 = mysqli_query($mysqli, $sql3);
                $linhas3 = mysqli_num_rows($res3);
                
                $linhas = $linhas2 + $linhas3 + $linhas1;

                $erro = 0;
                
                if(strstr($email, '@') == false){
                    $_SESSION['na-alterar'] = "email";
                    header('Location: index-func.php');
                    $erro = 1;
                }
                else if(empty($nome) || empty($senha) || empty($confirmasenha) || empty($email)){
                    $_SESSION['na-alterar'] = "vazio";
                    header('Location: index-func.php');
                    $erro = 1; 
                }
                else if($senha != $confirmasenha || password_verify($senha, $funcionario['senha']) == false){
                    $_SESSION['na-alterar'] = "senhas";
                    header('Location: index-func.php');
                    $erro = 1; 
                }
                else if($email != $funcionario['email'] and $linhas >= 1){
                    $_SESSION['na-alterar'] = "alterar";
                    header('Location: index-func.php');
                }

                else{
                    $sql = "UPDATE funcionario SET nome = '$nome', email = '$email' WHERE id_funcionario = $id_funcionario;";
                    mysqli_query($mysqli,$sql);
                    unset($_SESSION['na-alterar']);
                    header('Location: index-func.php');
                }
            }
        }
    }

    if(isset($_SESSION['adm'])){
        if($usuario == "adm"){
            if($operacao == "cadastrarservico"){
                $nome = $_POST["nomeservico"]; 
                $preco = $_POST["precoservico"];

                $sql = "SELECT * FROM servico WHERE nome = '$nome';";
                $res = mysqli_query($mysqli, $sql);
                $linhas = mysqli_num_rows($res);

                if($linhas == 1){
                    $_SESSION['na-servicos'] = "existente";
                    header('Location: index-adm.php');
                }
                
                else if(empty($nome) || empty($preco)){
                    $_SESSION['na-servicos'] = "vazio";
                    header('Location: index-adm.php');
                    $erro = 1; 
                }
                
                else{
                    $sql = "INSERT INTO servico (nome, preco) VALUES ('$nome', $preco);";
                    mysqli_query($mysqli,$sql);
                    unset($_SESSION['na-servicos']);
                    header('Location: index-adm.php');
                }
            }
        }
        if($operacao == "cadastrocliente"){
            $nome = $_POST["nome"]; 
            $email = $_POST["emailcadastrocliente"];
            $senha = $_POST["senhacadastrocliente"];
            $confirmasenha = $_POST["confirmasenha"];   
                
            $sql = "SELECT * FROM cliente WHERE email = '$email';";
            $res = mysqli_query($mysqli, $sql);
            $linhas = mysqli_num_rows($res);
                
            $erro = 0;
                
            if($linhas == 1){
                $_SESSION['na-cadastrocliente'] = "cadastrocliente";
                header('Location: index-adm.php');
            }
            else if(strstr($email, '@') == false){
                $_SESSION['na-cadastrocliente'] = "email";
                header('Location: index-adm.php');
                $erro = 1;
            }
            else if(empty($nome) || empty($senha) || empty($confirmasenha) || empty($email)){
                $_SESSION['na-cadastrocliente'] = "vazio";
                header('Location: index-adm.php');
                $erro = 1; 
            }
            else if($senha != $confirmasenha){
                $_SESSION['na-cadastrocliente'] = "senhas";
                header('Location: index-adm.php');
                $erro = 1; 
            }
            else{
                $senhacripto = password_hash($senha, PASSWORD_DEFAULT);
                $sql = "INSERT INTO cliente (nome, email, senha) VALUES ('$nome','$email','$senhacripto');";
                mysqli_query($mysqli,$sql);
                $busca_cliente = $sql = "SELECT id_cliente FROM cliente WHERE senha = '$senhacripto';";
                $res = mysqli_query($mysqli,$busca_cliente);
                $cliente = mysqli_fetch_array($res);
                $_SESSION['cliente'] = $cliente['id_cliente'];
                header('Location: index-adm.php');
            }
        }
        
        if($operacao == "cadastrofuncionario"){
            $nome = $_POST["nome"]; 
            $email = $_POST["emailcadastrofuncionario"];
            $senha = $_POST["senhacadastrofuncionario"];
            $confirmasenha = $_POST["confirmasenha"];   
                
            $sql = "SELECT * FROM funcionario WHERE email = '$email';";
            $res = mysqli_query($mysqli, $sql);
            $linhas = mysqli_num_rows($res);
                
            $erro = 0;
                
            if($linhas == 1){
                $_SESSION['na-cadastrofuncionario'] = "cadastrofuncionario";
                header('Location: index-adm.php');
            }
            else if(strstr($email, '@') == false){
                $_SESSION['na-cadastrofuncionario'] = "email";
                header('Location: index-adm.php');
                $erro = 1;
            }
            else if(empty($nome) || empty($senha) || empty($confirmasenha) || empty($email)){
                $_SESSION['na-cadastrofuncionario'] = "vazio";
                header('Location: index-adm.php');
                $erro = 1; 
            }
            else if($senha != $confirmasenha){
                $_SESSION['na-cadastrofuncionario'] = "senhas";
                header('Location: index-adm.php');
                $erro = 1; 
            }
            else{
                $senhacripto = password_hash($senha, PASSWORD_DEFAULT);
                $sql = "INSERT INTO funcionario (nome, email, senha) VALUES ('$nome','$email','$senhacripto');";
                mysqli_query($mysqli,$sql);
                $busca_funcionario = $sql = "SELECT id_funcionario FROM funcionario WHERE senha = '$senhacripto';";
                $res = mysqli_query($mysqli,$busca_funcionario);
                $funcionario = mysqli_fetch_array($res);
                $_SESSION['funcionario'] = $funcionario['id_funcionario'];
                header('Location: index-adm.php');
            }
        }
        if($operacao == "editservico"){
            $id = $_POST['id'];
            $nome = $_POST['nome'];
            $preco = $_POST['preco'];

            $sql = "UPDATE servico SET nome = '$nome', preco = '$preco' WHERE id_servico = $id;";
            $res = mysqli_query($mysqli, $sql);
            header('Location: index-adm.php');
        }
    }
    if($operacao == "recuperar-senha"){
        $senha = $_POST["senhaalterar"];
        $confirmasenha = $_POST["confirmasenha"]; 
        $email = $_SESSION['usuario'];
        $id_usuario = $_SESSION['id_usuario'];
        $role = $_SESSION['role-usuario'];

        $id = "id_"."$role";

        if($senha != $confirmasenha){
            $_SESSION['erro-redefinir'] = true;
            header('Location: redefinir-senha.php');
        }
        else{
            $senhacripto = password_hash($senha, PASSWORD_DEFAULT);
            $sql = "UPDATE $role SET senha = '$senhacripto' WHERE $id = $id_usuario AND email = '$email';";
            $res = mysqli_query($mysqli, $sql);
            if($role == "cliente"){
                $_SESSION["cliente"] = true;
            }
            else if($role == "funcionario"){
                $_SESSION["funcionario"] = true;
            }
            else if($role == "adm"){
                $_SESSION["adm"] = true;
            }
            header('Location: index.php');
        }
    }

                
?>