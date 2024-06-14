<?php
	require 'config.php'; //O require é necessário para chamar o arquivo config.php por conta das configurações do banco de dados

	$id = filter_input(INPUT_GET, 'id');
	
	if($id){
		$sql = $pdo->prepare("DELETE FROM usuario WHERE id = :id");
		$sql->bindValue(':id', $id);
		$sql->execute();
		header("Location: usuarios_cadastrados.php");
	}else{
		header("Location: usuarios_cadastrados.php");
	}

?>