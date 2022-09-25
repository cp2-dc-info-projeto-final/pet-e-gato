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

        if(empty($data_nasc)){
            echo "Por favor, preencha a data.<br>";
            $erro = 1;
        }


        if($erro == 0){
            $sql = "INSERT INTO cliente (nome,email,data_nasc,cartao)";
            $sql .= "VALUES ('$nome','$email','$data_nasc');";  
            mysqli_query($mysqli,$sql);

            echo "Nome: $nome <br>";
            echo "E-mail: $email <br>";
            echo "Data de nascimento: $data_nasc <br>";
        }
    }
    else if($operacao == "exibir"){
        $sql = "SELECT * FROM cliente;";  
        $res = mysqli_query($mysqli,$sql);
        $linhas = mysqli_num_rows($res);
        for($i = 0; $i < $linhas; $i++){
            $cliente = mysqli_fetch_array($res);
            echo "Nome: ".$cliente["nome"]."<br>";
            echo "E-mail: ".$cliente["email"]."<br>";
            echo "Data de nascimento: ".$cliente["data_nasc"]."<br>";
            echo "<a href='usuarios_cadastrados.php?cod_cliente=".$cliente["cod_cliente"]."'>
            Cadastrar cliente</a><br>";
            echo "<a href='altera.php?cod_cliente=".$cliente["cod_cliente"]."'>
            Editar dados do cliente</a><br>";
            echo "<a href='pagina_extra.php?cod_cliente=".$cliente["cod_cliente"]."&operacao=excluir'>
            Apagar cliente</a><br>";
            echo "----------------------------------------------<br>";
        }
    }
    else if($operacao == "buscar"){
        $nome = $_POST["nome"];
        $sql = "SELECT * FROM cliente WHERE nome LIKE '%$nome%';";  
        $res = mysqli_query($mysqli,$sql);
        $linhas = mysqli_num_rows($res);
        for($i = 0; $i < $linhas; $i++){
            $cliente = mysqli_fetch_array($res);
            echo "Nome: ".$cliente["nome"]."<br>";
            echo "E-mail: ".$cliente["email"]."<br>";
            echo "Data de nascimento: ".$cliente["data_nasc"]."<br>";
            echo "----------------------------------------------<br>";
        }
    }

    if($operacao == "editar"){
        $cod_cliente = $_POST["cod_cliente"];
        $nome = $_POST["nome"]; 
        $email = $_POST["email"];
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

        if(empty($data_nasc)){
            echo "Por favor, preencha a data.<br>";
            $erro = 1;
        }


        if($erro == 0){
            $sql = "UPDATE cliente SET nome = '$nome', email = '$email', data_nasc = '$data_nasc'";
            $sql .= "WHERE cod_cliente = $cod_cliente;";  
            mysqli_query($mysqli,$sql);

            echo "Dados do cliente atualizados com sucesso! <br>";
            echo "<br><a href='form_extra.html'>Voltar para a página inicial</a> <br>";
        }
    }
    
    if($operacao == "excluir"){
        $cod_cliente = $_GET["cod_cliente"];
       
            $sql = "DELETE FROM cliente WHERE cod_cliente = $cod_cliente";
            mysqli_query($mysqli,$sql);

            echo "Cliente excluído com sucesso! <br>";
            echo "<br><a href='form_extra.html'>Voltar para a página inicial</a> <br>";

    }

    echo "<br><b>#Terceirão #LP3</b>" 
?>
    </body>
</html>

<?php mysqli_close($mysqli); ?>