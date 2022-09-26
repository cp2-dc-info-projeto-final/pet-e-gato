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
        $endereco = $_POST["endereco"];
        $cpf = $_POST["cpf"];
        $telefone = $_POST["telefone"];
        $nome_pet = $_POST["nome_pet"];
        $nasc_pet = $_POST["nasc_pet"];
        $conexao = mysqli_connect("localhost","administrador","2122","pet_e_gato");

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

        if(strlen($senha) < 8 or strlen($senha) > 15){
            echo "Por favor, digite a senha entre 8 e 15 caracteres.<br>";
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
        
        if(empty($endereco)){
            echo "Por favor, prencha o endereço.<br>";
            $erro = 1;
        }

        if(!preg_match("^([0-9]){3}\.([0-9]){3}\.([0-9]){3}-([0-9]){2}$", $cpf)) {
            echo "CPF inválido. Por favor, preencha com um CPF válido.<br>";
        }
    

        if(!preg_match('^\(+[0-9]{2,3}\) [0-9]{4}-[0-9]{4}$^', $telefone)){
            echo "Telefone inváildo. Por favor, preencha com um telefone válido.<br>";
        }

        if(empty($nome)){
            echo "Por favor, preencha o nome do seu pet.<br>";
            $erro = 1;
        }
        
        if(empty($data_nasc)){
            echo "Por favor, preencha a data de nascimento do seu pet.<br>";
            $erro = 1;
        }

        if($erro == 0){
            $sql = "INSERT INTO cliente (nome,email,senha,repetirsenha,data_nasc,endereco,cpf,telefone,nome_pet,nasc_pet)";
            $sql .= "VALUES ('$nome','$email','$senha','$repetirsenha','$data_nasc','$endereco', '$cpf','$telefone','$nome_pet','$nasc_pet' );";  
            mysqli_query($mysqli,$sql);

            echo "Nome: $nome <br>";
            echo "E-mail: $email <br>";
            echo "Data de nascimento: $data_nasc <br>";
            echo "Endereço: $endereco <br>";
            echo "CPF: $cpf <br>";
            echo "Telefone: $telefone <br>";
            echo "Nome do Pet: $nome_pet <br>";
            echo "Data de nascimento do Pet: $nasc_pet <br>";
        }
    }

    
    echo "<br><b>#Terceirão #LP3</b>" 
?>
    </body>
</html>

<?php mysqli_close($mysqli); ?>
