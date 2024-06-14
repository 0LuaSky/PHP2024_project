<!-- Formulário para o sistema de Cadastro e Login. -->
<?php require "bootsLibs.php"?>
<?php require "navbar.php";?>
<form method="POST" action="cadastrar_action.php">
    <label>
        Nome: <input type="text" name="nome"/>
    </label>
    <label>
        Email: <input type="email" name="email"/>
    </label>
    <input type="submit" value="Salvar"/>
</form>