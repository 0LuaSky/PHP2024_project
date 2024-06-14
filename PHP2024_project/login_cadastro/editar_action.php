<?php
	require 'config.php'; //O require é necessário para chamar o arquivo config.php por conta das configurações do banco de dados

	//Pegando os dados selecionados
	$id = filter_input(INPUT_POST, 'id');
	$nome = filter_input(INPUT_POST, 'nome');
	$email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);

	//Entrada do if com todas as variáveis preenchidas
	if($id && $nome && $email){
		$sql = $pdo->prepare("UPDATE usuario SET nome = :nome, email = :email WHERE id = :id"); //Preparando para atualizar dados no banco de dados
		$sql->bindValue(':nome', $nome); //Atribuindo valores
		$sql->bindValue(':email', $email); //Atribuindo valores
		$sql->bindValue(':id', $id); //Atribuindo valores
		$sql->execute(); //Executando e salvando no Banco de Dados

		header("Location: usuarios_cadastrados.php");
		exit;
	}else{
		header("Location: usuarios_cadastrados.php");
		exit;
	}