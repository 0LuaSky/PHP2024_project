<?php
require 'config.php';

//Capturando parâmetros, utilizando variáveis auxiliares
$nome = filter_input(INPUT_POST, 'nome');
$email = filter_input(INPUT_POST,'email', FILTER_VALIDATE_EMAIL);

if($nome && $email){

    $sql = $pdo->prepare("SELECT * FROM usuario WHERE email = :email");
    $sql->bindValue(':email', $email);
    $sql->execute();

    //Verificando a existência de um e-mail já cadastrado, os três iguais é a verificação de tudo.
    if($sql->rowCount() === 0){
        $sql = $pdo->prepare("INSERT INTO usuario (nome, email) VALUES (:nome, :email)");
        $sql->bindValue(':nome', $nome);
        $sql->bindValue(':email', $email);
        $sql->execute();

        header("Location: index.php");
        exit;
    }else{
        header("Location: cadastrar.php");
    }
    
}else{
    header("Location: cadastrar.php");
    exit;
}
