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
            <!--barra para navegar atravez da pagina-->
            <nav id="navbar-example2" class="navbar sticky-top bg-body-tertiary px-3 mb-3" style="display:flex">
                <a class="navbar-brand" href="#" style="font-size: 50px">Navbar</a>
                <ul class="nav nav-pills" style="font-size: 30px">
                    <li class="nav-item">
                        <a class="nav-link" href="#scrollspyHeading1">Tamanho</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#scrollspyHeading2">Pão</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#scrollspyHeading3">Proteina</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#scrollspyHeading4">Recheio</a>
                    </li>                    
                    <li class="nav-item">
                        <a class="nav-link" href="#scrollspyHeading5">Complemento</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#scrollspyHeading6">Salada</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#scrollspyHeading7">Tempero</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#scrollspyHeading8">Molho</a>
                    </li>                    
                </ul>
            </nav>
        </body>
    </html>