<?php
    require 'config.php'; //O require é necessário para chamar o arquivo config.php por conta das configurações do banco de dados

    //Capturando parâmetros, utilizando variáveis auxiliares
    $nome = filter_input(INPUT_POST, 'nome');
    $email = filter_input(INPUT_POST,'email', FILTER_VALIDATE_EMAIL);

    //Com a variável nome e email se inicia o if
    if($nome && $email){
        //Lançando dados para o banco de dados, pegando os itens escritos.
        $sql = $pdo->prepare("SELECT * FROM usuario WHERE email = :email");
        $sql->bindValue(':email', $email);
        $sql->execute();

        //Verificando a existência de um e-mail já cadastrado, os três iguais é a verificação de tudo.
        if($sql->rowCount() === 0){
            $sql = $pdo->prepare("INSERT INTO usuario (nome, email) VALUES (:nome, :email)");
            $sql->bindValue(':nome', $nome);
            $sql->bindValue(':email', $email);
            $sql->execute();
            //Levando novamente para a página de cadastro
            header("Location: usuarios_cadastrados.php");
            exit;
        }else{
            header("Location: cadastrar.php");
        }
        
    }else{
        header("Location: cadastrar.php");
        exit;
    }
?>