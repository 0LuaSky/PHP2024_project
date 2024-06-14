<!DOCTYPE html>
    <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
        </head>
        <body>
        <?php
            //importando um arquivo contendo bibliotecas para o uso do framework "bootstrap"
            require "bootsLibs.php";
        ?>
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container-fluid">
                <a class="navbar-brand" href="/php2024_project-main/PHP2024_project/index.php">Voltar</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="usuarios_cadastrados.php">Lista de usuários</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="cadastrar.php">Cadastrar</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </body>
</html>