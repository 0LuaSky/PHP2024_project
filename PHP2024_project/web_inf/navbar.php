<!--  
    Arquivo que permite uma melhor navegação para o resto da pagina.
/-->
<!DOCTYPE html>
    <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
        </head>
        <body>
            <?php
                //importando um arquivo contendo bibliotecas para o uso do framework "bootstrap"
                require "bootslibs.php";
            ?>
            <nav id="navbar-example2" class="navbar sticky-top bg-body-tertiary px-3 mb-3">
                <a class="navbar-brand" href="#" style="font-size: 50px">Navbar</a>
                <ul class="nav nav-pills" style="font-size: 30px">
                    <li class="nav-item">
                        <a class="nav-link" href="#scrollspyHeading2">Pão</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#scrollspyHeading3">proteina</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#scrollspyHeading4">queijo</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#scrollspyHeading5">complemento</a>
                    </li>
                    
                </ul>
            </nav>
            <nav id="navbar-example2" class="navbar sticky-top bg-body-tertiary px-3 mb-3">
                <ul class="nav nav-pills" style="font-size: 30px">
                    <div class="progress" role="progressbar" aria-label="Basic example" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">
                        <div class="progress-bar" style="width: 50%"></div>
                    </div>
                </ul>
            </nav>
        </body>
    </html>