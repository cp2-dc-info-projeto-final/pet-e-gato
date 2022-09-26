<?php include "conecta_mysql.inc"; ?>
<html>
    <head>
        <title>Dados Cadastrados</title>
        <meta charset="UTF-8">
    </head>
    <body>
        <h1>Dados Cadastrados</h1>
<?php
    $operacao = $_REQUEST["operacao"];

    if($operacao == "inserir"){
        $nome = $_POST["nome"]; 
        $email = $_POST["email"];
        $senha = $_POST["senha"];
        $senha_rep = $_POST["senha_rep"];
        $data_nasc = $_POST["data_nasc"];


        $erro = 0;

        if(empty($nome) or strstr($nome, ' ') == false){
            echo "Por favor, preencha o nome completo.<br>";
            $erro = 1;
        }

        if(strlen($email) < 10 or strstr($email, '@') == false){
            echo "Por favor, preencha o e-mail corretamente.<br>";
            $erro = 1;
        }

        $sql = "SELECT * FROM cliente WHERE email = '$email';";
        $res = mysqli_query($mysqli, $sql);


        if(mysqli_num_rows($res) == 1){
            echo "E-mail já cadastrado. Por favor, digite outro e-mail.<br>";
            $erro = 1;
        }

        if(strlen($senha) < 8 or strlen($senha) > 20){
            echo "Por favor, digite a senha entre 5 e 20 caracteres.<br>";
            $erro = 1;
        }

        if($senha != $senha_rep){
            echo "Por favor, repita a senha corretamente.<br>";
            $erro = 1;
        }

        if(empty($data_nasc)){
            echo "Por favor, preencha a data.<br>";
            $erro = 1;
        }


        if($erro == 0){
            $sql = "INSERT INTO cliente (nome,email,senha,data_nasc)";
            $sql .= "VALUES ('$nome','$email','$senha','$data_nasc');";  
            mysqli_query($mysqli,$sql);

            echo "Administrador cadastrado com sucesso! <br>";
            echo "Nome: $nome <br>";
            echo "E-mail: $email <br>";
            echo "Data de nascimento: $data_nasc <br>";

        }
    }

?>
    </body>
</html>
<?php mysqli_close($mysqli); ?>