CREATE USER 'administrador'@'localhost' IDENTIFIED BY '2122'; 
GRANT ALL PRIVILEGES ON pet_e_gato.* TO 'administrador'@'localhost';


CREATE TABLE cliente ( 
    nome varchar(30) NOT NULL, 
    email varchar(30) NOT NULL, 
    senha varchar(20) NOT NULL, 
    data_nasc varchar(10) NOT NULL,
    endereco varchar(50) NOT NULL,
    cpf varchar(15) NOT NULL, 
    telefone varchar (14) NOT NULL,
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

CREATE TABLE servicos ( 
   	servico varchar (30) NOT NULL,
    descricao varchar(200) NOT NULL, 
    preco varchar(30) NOT NULL, 
    primary key(servico)
 
);



