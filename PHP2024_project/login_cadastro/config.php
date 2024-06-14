<?php //montagem de parâmetros
	$db_name = 'test'; //nome do banco de dados
	$db_host = 'localhost: 3306'; //caminho do banco de dados
	$db_user = 'root'; //usuario
	$db_password = ''; //senha do usuario

	$pdo = new PDO("mysql:dbname=" .$db_name.";host=".$db_host, $db_user, $db_password); //PHP Data Objects, ela é uma classe para gerenciar conexões com bancos de dados.
?>