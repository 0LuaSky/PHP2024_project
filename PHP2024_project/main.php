    <!DOCTYPE html>
    <html lang="en" data-bs-theme="dark">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>placeholder</title>

            <style>
                .opt{
                    color: #ffffff;
                    text-shadow:-2px -2px 0 #000000, 2px -2px 0 #000000,-2px 2px 0 #000000,2px 2px 0 #000000;
                    text-align: center; 
                    vertical-align: middle;
                    border-radius:30px;
                }
            </style>

        </head>
        <body>
            
            <?php
                //Arquivo para a barra superiora ser incluida na pagina.
                require "web_inf/navbar.php";
            ?>
            <div data-bs-spy="scroll" data-bs-target="#navbar-example2" data-bs-root-margin="0px 0px -40%" data-bs-smooth-scroll="true" class="scrollspy-example bg-body-tertiary p-3 rounded-2" tabindex="0">
                
                <!--Carrosel do bootstrap que mostra 3 imagems com promoções e alertas. -->
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
                            <img src="https://assets.unileversolutions.com/recipes-v2/106683.jpg" style="height: 720px; width: 1440px;" class="d-block w-100" alt="ERRO IMAGEM NÃO ENCONTRADA">
                            <div class="carousel-caption d-none d-md-block" style="color: #fff; text-shadow:-1px -1px 0 #000,1px -1px 0 #000,-1px 1px 0 #000,1px 1px 0 #000;">
                                <h2>Loucura do queijo!</h2>
                                <h3>Escolha para por mais queijo para turbinar seu lanche!!!</h3>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="https://s2-receitas.glbimg.com/WRmlTneqx4fhkrqRWxaIYjE295I=/0x0:1080x608/924x0/smart/filters:strip_icc()/i.s3.glbimg.com/v1/AUTH_e84042ef78cb4708aeebdf1c68c6cbd6/internal_photos/bs/2022/o/3/jgpfAWQ12MnZiAvYX3wQ/capa-materia-gshow-2022-01-14t133936.106.png" style="height: 720px; width: 1440px;" class="d-block w-100" alt="ERRO IMAGEM NÃO ENCONTRADA">
                            <div class="carousel-caption d-none d-md-block" style="color: #fff; text-shadow:-1px -1px 0 #000,1px -1px 0 #000,-1px 1px 0 #000,1px 1px 0 #000;">
                                <h2>O lanche perfeito esta aqui!</h2>
                                <h3>Escolha almondegas como proteina pra reviver esse lanche maravilhoso!!</h3>
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

                <form>
                    <div class="opt" style="background-image: url('web_inf/imagem/tamanho.jpg')">
                        <h1 id="scrollspyHeading1">Escolha o tamanho certo para preencher seu vazio.</h1>
                    </div>
                    <br>
                    <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
                    <br><br>
                </form>

                <form>
                    <div class="opt" style="background-image: url('')">
                        <h1 id="scrollspyHeading2">Escolha o pão ideal para você.</h1>
                    </div>
                    <br>
                    <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
                    <br><br>
                </form>

                <form>
                    <div class="opt" style="background-image: url('')">
                        <h1 id="scrollspyHeading3">Escolha uma proteina para dar sabor ao seu lanche.</h1>
                    </div>
                    <br>
                    <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
                    <br><br>
                </form>

                <form>
                    <div class="opt" style="background-image: url('')">
                        <h1 id="scrollspyHeading4">Escolha algo para passar no pão para complementar essa delicia.</h1>
                    </div>
                    <br>
                    <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
                    <br><br>
                </form>

                <form>
                    <div class="opt" style="background-image: url('')">
                        <h1 id="scrollspyHeading5">Escolha um complemento que adicione mais sabor ao seu lanche.</h1>
                    </div>
                    <br>
                    <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
                    <br><br>
                </form>


                <form>
                    <div class="opt" style="background-image: url('')">
                        <h1 id="scrollspyHeading6">Escolha uma salada que deixe o seu lanche ainda mais perfeito.</h1>
                    </div>
                    <br>
                    <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
                    <br><br>
                </form>

                <form>
                    <div class="opt" style="background-image: url('')">
                        <h1 id="scrollspyHeading7">Escolha um tempero para dar ainda mais sabor a essa perfeição.</h1>
                    </div>
                    <br>
                    <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
                    <br><br>
                </form>

                <form>
                    <div class="opt" style="background-image: url('')">
                        <h1 id="scrollspyHeading8">Escolha um molho para finalizar o seu lanche ideal.</h1>
                    </div>
                    <br>
                    <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
                    <br><br>
                </form>


            </div>
        </body>
    </html>