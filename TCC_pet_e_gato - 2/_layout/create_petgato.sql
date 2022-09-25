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
    primary key(matricula))


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