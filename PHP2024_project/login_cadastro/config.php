<?php //montagem de parâmetros
	$db_name = 'test'; //nome do banco de dados
	$db_host = 'localhost: 3306'; //caminho do banco de dados
	$db_user = 'root';
	$db_password = '';

	$pdo = new PDO("mysql:dbname=" .$db_name.";host=".$db_host, $db_user, $db_password);
?>