CREATE USER 'administrador'@'localhost' IDENTIFIED BY '2122'; 
GRANT ALL PRIVILEGES ON pet_e_gato.* TO 'administrador'@'localhost';


CREATE TABLE cliente ( 
    cpf int NOT NULL, 
    nome varchar(30) NOT NULL, 
    email varchar(30) NOT NULL, 
    senha varchar(20) NOT NULL, 
    data_nasc varchar(10) NOT NULL,
    endereco varchar(50) NOT NULL,
    nome_pet varchar(30) NOT NULL,
    nasc_pet varchar(10) NOT NULL,

    primary key(cpf) 
);


CREATE TABLE administrador ( 
   	matricula int NOT NULL AUTO_INCREMENT, 
    nome varchar(30) NOT NULL, 
    email varchar(30) NOT NULL, 
    senha varchar(20) NOT NULL,
    data_nasc varchar(10) NOT NULL,  
    primary key(matricula) 
);

CREATE TABLE funcionario ( 
   	matricula int NOT NULL AUTO_INCREMENT, 
    nome varchar(30) NOT NULL, 
    email varchar(30) NOT NULL, 
    senha varchar (20) NOT NULL,
    data_nasc varchar(10) NOT NULL,  
    primary key(matricula)
);


<html>
    <head>
        <title>Cadastro de usuários</title>
        <meta charset="UTF-8">

    <link rel="stylesheet" href="bootstrap.min.css">
    </head>
    <body>
        <h1>Cadastre-se:</h1>
        <form action="usuarios_cadastrados.php" method="POST"> 
            <input type="hidden" name="operacao" value="inserir">
            <p>Nome: <input type="text" name="nome"></p>
            <p>E-mail: <input type="text" name="email"></p>
            <p>Data de Nascimento: <input type="date" name="data_nasc"></p>
            <p>Digite seu CPF:</p> <input type="text" name="cpf" \
			    pattern="\d{3}\.\d{3}\.\d{3}-\d{2}" \
			    title="Digite um CPF no formato: xxx.xxx.xxx-xx">
            <p>Endereço: <input type="text" name="endereco"></p>
            
            <p><input type="submit" value="Enviar"></p> 
        </form>
    </body>    
</html>


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


        if($operacao == "excluir"){
        $cod_cliente = $_GET["cod_cliente"];
       
            $sql = "DELETE FROM cliente WHERE cod_cliente = $cod_cliente";
            mysqli_query($mysqli,$sql);

            echo "Cliente excluído com sucesso! <br>";
            echo "<br><a href='form_extra.html'>Voltar para a página inicial</a> <br>";

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