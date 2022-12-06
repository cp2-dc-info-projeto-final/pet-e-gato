<?php

	define('HOST', 'localhost');
	define('USER', 'administrador');
	define('PASS', '2122');
	define('BASE', 'pet_e_gato');

	$conn = new MySQLi(HOST,USER,PASS,BASE);

	if(mysqli_connect_errno()){
		printf("Erro ao conectar: ", mysqli_connect_error());
		exit();
	}

?>