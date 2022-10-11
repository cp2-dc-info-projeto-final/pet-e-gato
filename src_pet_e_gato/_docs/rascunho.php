else if($operacao == "exibir"){
        $sql = "SELECT * FROM cliente;";  
        $res = mysqli_query($mysqli,$sql);
        $linhas = mysqli_num_rows($res);
        for($i = 0; $i < $linhas; $i++){
            $cliente = mysqli_fetch_array($res);
            echo "Nome: ".$cliente["nome"]."<br>";
            echo "E-mail: ".$cliente["email"]."<br>";
            echo "Data de nascimento: ".$cliente["data_nasc"]."<br>";
            echo "Endereço: ".$cliente["endereco"]."<br>";
            echo "CPF: ".$cliente["cpf"]."<br>";
            echo "Telefone: ".$cliente["telefone"]."<br>";
            echo "Nome do PET: ".$cliente["nome_pet"]."<br>";
            echo "Data de nascimento do PET: ".$cliente["nasc_pet"]."<br>";
            echo "<a href='usuarios_cadastrados.php?cod_cliente=".$cliente["cod_cliente"]."'>
            Cadastrar cliente</a><br>";
            echo "<a href='altera.php?cod_cliente=".$cliente["cod_cliente"]."'>
            Editar dados do cliente</a><br>";
            echo "<a href='index.html?cod_cliente=".$cliente["cod_cliente"]."&operacao=excluir'>
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
            echo "<br><a href='index.html'>Voltar para a página inicial</a> <br>";
        }
    }
    
    if($operacao == "excluir"){
        $cod_cliente = $_GET["cod_cliente"];
       
            $sql = "DELETE FROM cliente WHERE cod_cliente = $cod_cliente";
            mysqli_query($mysqli,$sql);

            echo "Cliente excluído com sucesso! <br>";
            echo "<br><a href='index.html'>Voltar para a página inicial</a> <br>";

    }


    $erro = 0;

if(empty($nome) or strxstr($nome, ' ') == false){
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

if(strlen($senha) < 10 or strstr($senha, ' ') == false){
    echo "Por favor, preencha a sua senha corretamente.<br>";
    $erro = 1;
}

if(strlen($endereco) > 10 or strstr($endereco, ' ') == false){
    echo "Por favor, preencha o seu endereço corretamente.<br>";
    $erro = 1;
}

if(strlen($cpf) < 11 or strstr($cpf, ' ') == false){
    echo "Por favor, preencha o seu CPF corretamente.<br>";
    $erro = 1;
}

if(strlen($telefone) < 11 or strstr($telefone, ' ') == false){
    echo "Por favor, preencha o seu telefone corretamente.<br>";
    $erro = 1;
}

if(strlen($nome_pet) < 10 or strstr($nome_pet, ' ') == false){
    echo "Por favor, preencha o nome do seu PET corretamente.<br>";
    $erro = 1;
}

if(strlen($nasc_pet)){
    echo "Por favor, preencha a data de nascimento do seu PET corretamente.<br>";
    $erro = 1;
}


if($erro == 0){






    <fieldset>
          
          <legend><span class="number">2</span>  Informações do Pet</legend>
          <div class="row">
            <div class="form-group col-md-6">
          <label for="nome_pet">Nome do pet:</label>
          <input type="text" required="required" id="nome_pet" name="nome_pet" placeholder="Nome do seu PET">
            </div>
      
            <div class="form-group col-md-6">
          <label for="nasc_pet">Data de Nascimento:</label>
          <input type="date" required="required" id="nasc_pet" name="nasc_pet">
            </div> 
          </div>
        </fieldset> 