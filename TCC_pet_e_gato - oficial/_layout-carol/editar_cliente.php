<?php
$operacao = $_POST['operacao'];

if($operacao == "editar"){

    // Aqui as variáveis vão receber os valores, é só você substituir pelos campos da sua tabela
    $nome = $_POST["nome"];
    $email = $_POST["email"];  
    $data_nasc = $_POST["data_nasc"]; 
    $telefone = $_POST["telefone"]; 
    $cpf = $_POST["cpf"]; 
    $senha = $_POST["senha"]; 
    $nome_pet = $_POST["nome_pet"];
    $nasc_pet = $_POST["nasc_pet"];

    // Aqui você vai selecionar a tabela que você quer alterar e inserir os valores
    $sql = "UPDATE cliente SET nome = '$nome', cpf = '$cpf', telefone = '$telefone', data_nasc = '$data_nasc', email = '$email', senha = '$senha', nome_pet = '$nome_pet', nasc_pet = '$nasc_pet'";
    $sql .= "WHERE cpf = $cpf;";  
    $mysqli = mysqli_connect("localhost","administrador","2122","pet_e_gato");
    mysqli_query($mysqli,$sql);
 
    
    header('location: clientes.php');
}

elseif ($operacao == "buscar"){

}

?>