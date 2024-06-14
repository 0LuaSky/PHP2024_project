<?php
	require 'config.php'; //O require é necessário para chamar o arquivo config.php por conta das configurações do banco de dados
    require "bootsLibs.php";
	
	$usuario = []; //Vetor de usuários
	$id = filter_input(INPUT_GET, 'id'); //Resgatando id com uma variável auxiliar
	if($id){
		$sql = $pdo->prepare("SELECT * FROM usuario WHERE id = :id");
		$sql->bindValue(':id', $id);
		$sql->execute(); //execução no banco de dados

		if($sql->rowCount() > 0){
			$usuario = $sql->fetch(PDO::FETCH_ASSOC);
		}else{
			header("Location: cadastrar.php");
			exit;
		}
	}else{
		header("Location: usuarios_cadastrados.php");
	}

?>

<h1>Editar Usuário</h1>
<form method="POST" action="editar_action.php">
	<input type="hidden" name="id" value="<?=$usuario['id'];?>"/>
	<label>
		Nome: <input type="text" name="nome" value="<?=$usuario['nome'];?>"/>
	</label>
	<label>
		E-mail: <input type="text" name="email" value="<?=$usuario['email'];?>" />
	</label>
	<input type="submit" value="Atualizar"/>
</form>