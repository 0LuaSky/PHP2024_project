<?php 
require 'config.php';
//Apresentação da lista de usuários
$lista = [];
$sql = $pdo->query("")
?>

<h1>Listagem de Usuários</h1>

<table border="1">
    <tr>
        <th>ID</th>
        <th>Nome</th>
        <th>Email</th>
        <th>Ações</th>
    </tr>
</table>

<a href=cadastrar.php>Cadastrar Usuário Teste</a>