<!DOCTYPE html>
    <html lang="en" data-bs-theme="dark">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>placeholder</title>
        </head>
        <body>
            
            <?php
                //Arquivo para a barra superiora ser incluida na pagina.
                require "web_inf/navbar.php";
            ?>
            <!--
                Carrosel que mostra 3 imagems com promoções e alertas. 
                /-->
            <div data-bs-spy="scroll" data-bs-target="#navbar-example2" data-bs-root-margin="0px 0px -40%" data-bs-smooth-scroll="true" class="scrollspy-example bg-body-tertiary p-3 rounded-2" tabindex="0">
                <div id="carouselExampleCaptions" class="carousel slide" style="height: 720px; width: 1440px; dysplay: flex; margin:0 auto; margin-top: 2%; margin-bottom: 2%;" >
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
                    </div>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="https://newr7-r7-prod.web.arc-cdn.net/resizer/v2/3YBFP7H2N5LITDC2TVMEEYX6EU.jpg?auth=a50e7725da13442f5ef882fe245ca0aaf3c6546ef6a86fe27803166d31a9261c&width=720&height=480" style="height: 720px; width: 1440px;" class="d-block w-100" alt="ERRO IMAGEM NÃO ENCONTRADA">
                            <div class="carousel-caption d-none d-md-block" style="color: #fff; text-shadow:-1px -1px 0 #000,1px -1px 0 #000,-1px 1px 0 #000,1px 1px 0 #000;">
                                <h2>Tamanho não é documento!</h2>
                                <h3>Escolha 3 lanches pequenos e pague por apenas 2!!!</h3>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="https://newr7-r7-prod.web.arc-cdn.net/resizer/v2/3YBFP7H2N5LITDC2TVMEEYX6EU.jpg?auth=a50e7725da13442f5ef882fe245ca0aaf3c6546ef6a86fe27803166d31a9261c&width=720&height=480" style="height: 720px; width: 1440px;" class="d-block w-100" alt="ERRO IMAGEM NÃO ENCONTRADA">
                            <div class="carousel-caption d-none d-md-block" style="color: #fff; text-shadow:-1px -1px 0 #000,1px -1px 0 #000,-1px 1px 0 #000,1px 1px 0 #000;">
                                <h2>Tamanho não é documento!</h2>
                                <h3>Escolha 3 lanches pequenos e pague por apenas 2!!!</h3>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="https://newr7-r7-prod.web.arc-cdn.net/resizer/v2/3YBFP7H2N5LITDC2TVMEEYX6EU.jpg?auth=a50e7725da13442f5ef882fe245ca0aaf3c6546ef6a86fe27803166d31a9261c&width=720&height=480" style="height: 720px; width: 1440px;" class="d-block w-100" alt="ERRO IMAGEM NÃO ENCONTRADA">
                            <div class="carousel-caption d-none d-md-block" style="color: #fff; text-shadow:-1px -1px 0 #000,1px -1px 0 #000,-1px 1px 0 #000,1px 1px 0 #000;">
                                <h2>Tamanho não é documento!</h2>
                                <h3>Escolha 3 lanches pequenos e pague por apenas 2!!!</h3>
                            </div>
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>

            <!--
                Forms responsaveis pela seleção de como sera o lanche.
                com "rastredores que permitem ver onde o usuario es em sua posição na pagina.    
            /-->

                <h1 id="scrollspyHeading2">Escolha o tipo de pão ideal para você.</h1>
                <p>op1 et  </p>
                <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>

                <h1 id="scrollspyHeading3">escolha o molho para o lanche ficar pefeito.</h1>
                <p>Manteiga</p>
                <p>maionese</p>
                <p>requijão</p>
                <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>

                <h1 id="scrollspyHeading4">Escolha uma proteina para dar sabor ao lanche.</h1>
                <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>

                <h1 id="scrollspyHeading5">Escolha o queijo ideal para complementar essa delicia.</h1>
                <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>

                <h1 id="scrollspyHeading6">Não se esqueca de escolher a salada.</h1>
                <p>...</p>
            </div>
        </body>
    </html>