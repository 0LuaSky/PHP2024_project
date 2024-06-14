<?php 
    require 'config.php';
    require "bootsLibs.php";
    require "navbar.php";
    //Apresentação da lista de usuários
    $lista = [];
    $sql = $pdo->query("SELECT * FROM usuario"); //query seleciona os dados no banco de dados
    if($sql->rowCount() > 0){
        $lista = $sql->fetchAll(PDO::FETCH_ASSOC);
    }
?>

<h1>Listagem de Usuários</h1>
<!-- Criando tabela -->
<table border="1">
    <tr> <!-- Colunas -->
        <th>ID</th>
        <th>Nome</th>
        <th>Email</th>
        <th>Ações</th>
    </tr>
    <?php foreach($lista as $usuario): ?>
    <tr>
        <!-- Preenchendo as colunas -->
        <td><?=$usuario['id'];?></td>
        <td><?=$usuario['nome'];?></td>
        <td><?=$usuario['email'];?></td>
        <td>
            <!-- Inclusão dos botões -->
            <a href="editar.php?id=<?=$usuario['id'];?>">[ Editar ]</a><!-- Redirecionando e enviando ID para outro .php-->
            <a href="excluir.php?id=<?=$usuario['id'];?>">[ Excluir ]</a><!-- Redirecionando e enviando ID para outro .php-->
        </td>
    </tr>
    <?php endforeach; ?>
</table>