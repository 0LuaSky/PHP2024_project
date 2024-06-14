<!DOCTYPE html>
    <html lang="en" data-bs-theme="dark">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Find Food</title>

            <style>
                .opt{
                    color: #ffffff;
                    text-shadow:-2px -2px 0 #000000, 2px -2px 0 #000000,-2px 2px 0 #000000,2px 2px 0 #000000;
                    text-align: center; 
                    vertical-align: middle;
                    border-radius:30px;
                }
                .grade{
                    display: grid;
                    grid-template-columns: auto auto;
                    font-size:30px;
                }

                .grade > .content{
                    text-align: center;
                    width
                }
            </style>

            
        </head>
        <body>
            
            <?php
                // define as variaveis como nulas
                $tamanho = $pao = $recheio = $proteina = $queijo = " ";
                $complemento = $salada = $tempero = $molho = " ";

                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                    if ( !empty($_POST["tamanho"]) ) {
                        $tamanho = test_input($_POST["tamanho"]);
                    }
                    if ( !empty($_POST["pao"]) ) {
                        $pao = test_input($_POST["pao"]);
                    }
                    if ( !empty($_POST["recheio"]) ) {
                        $recheio = test_input($_POST["recheio"]);
                    }
                    if ( !empty($_POST["proteina"]) ) {
                        $proteina = test_input($_POST["proteina"]);
                    }
                    if ( !empty($_POST["queijo"]) ) {
                        $queijo = test_input($_POST["queijo"]);
                    }
                    if ( !empty($_POST["complemento"]) ) {
                        $complemento = test_input($_POST["complemento"]);
                    }
                    if ( !empty($_POST["tempero"]) ) {
                        $tempero = test_input($_POST["tempero"]);
                    }
                    if ( !empty($_POST["proteina"]) ) {
                        $proteina = test_input($_POST["proteina"]);
                    }
                    if ( !empty($_POST["molho"]) ) {
                        $molho = test_input($_POST["molho"]);
                    }
                }
                  
                function test_input($data) {
                    $data = trim($data);
                    $data = stripslashes($data);
                    $data = htmlspecialchars($data);
                    return $data;
                }
            ?>
            <?php
                //Arquivo para a barra superiora ser incluida na pagina.
                require "web_inf/navBar.php";
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
                    Form responsaveis pela seleção de como sera o lanche.
                    com divs dentro possuindo "rastredores" que permitem ver onde o usuario es em sua posição na pagina.    
                /-->
 
                <form method="POST" id="" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
                    <div id="tamanho">
                    
                        <div class="opt" style="background-image: url('web_inf/imagem/tamanho.jpg')">
                            <h1 id="scrollspyHeading1">Escolha o tamanho certo para preencher seu vazio.</h1>
                        </div>
                        <br><br>
                        <div class="grade">
                            <div class="content">                           
                                    <input class="form-check-input" type="radio" name="tamanho" id="pequeno" value="pequeno">
                                    <label class="form-check-label">Pequeno.</label>
                                    <h2>&nbsp R$ 6,99</h2>
                            </div>
                            <div class="content">
                                <input class="form-check-input" type="radio" name="tamanho" id="medio" value="medio">
                                <label class="form-check-label">Médio.&nbsp &nbsp &nbsp</label>
                                <h2>&nbsp &nbsp R$ 10,99</h2>
                            </div>
                            <div class="content">
                                <input class="form-check-input" type="radio" name="tamanho" id="grande" value="grande">
                                <label class="form-check-label">Grande. &nbsp </label>
                                <h2>&nbsp &nbsp R$ 14,99</h2>
                            </div>
                            <div class="content">
                                <input class="form-check-input" type="radio" name="tamanho" id="colossal" value="colossal">
                                <label class="form-check-label">COLOSAL!</label>
                                <h2>&nbsp &nbsp R$ 18,99</h2>
                            </div>

                        </div>
                        <br><br>
                        <br><br>
                        <br><br>
                    </div>

                    <div id="pao">
                        <div class="opt" style="background-image: url('')">
                            <h1 id="scrollspyHeading2">Escolha o pão ideal para você.</h1>
                        </div>
                        <br><br>
                        <div class="grade">
                            <div class="content">                            
                                <input class="form-check-input" type="radio" name="pao" id="branco" value="branco">
                                <label class="form-check-label">Pão Branco.&nbsp &nbsp</label>

                            </div>
                            <div class="content">
                                <input class="form-check-input" type="radio" name="pao" id="tres_queijo" value="tres_queijo">
                                <label class="form-check-label">três queijos.&nbsp</label>
                            </div>
                            <div class="content">
                                <input class="form-check-input" type="radio" name="pao" id="integral" value="integral">
                                <label class="form-check-label">Integral.&nbsp &nbsp &nbsp &nbsp &nbsp</label>
                            </div>
                            <div class="content">
                                <input class="form-check-input" type="radio" name="pao" id="australiano" value="australiano">
                                <label class="form-check-label">Australiano. &nbsp</label>
                            </div>
                            <div class="content">
                                <input class="form-check-input" type="radio" name="pao" id="brioche" value="brioche">
                                <label class="form-check-label">Brioche.&nbsp &nbsp &nbsp &nbsp &nbsp</label>
                            </div>
                            <div class="content">
                                <input class="form-check-input" type="radio" name="pao" id="batata" value="batata">
                                <label class="form-check-label">Pão de batata.</label>
                            </div>
                            <div class="content">
                                <input class="form-check-input" type="radio" name="pao" id="vegano" value="vegano">
                                <label class="form-check-label">Vegano.&nbsp &nbsp &nbsp &nbsp &nbsp</label>
                            </div>
                            <div class="content">
                                <input class="form-check-input" type="radio" name="pao" id="sem_glutem" value="sem_glutem">
                                <label class="form-check-label">Glutem free. &nbsp &nbsp</label>
                            </div>
                        </div>
                        <br><br>
                        <br><br>
                        <br><br>
                    </div>
                    
                    <div id="recheio">
                        <div class="opt" style="background-image: url('')">
                            <h1 id="scrollspyHeading3">Escolha algo para passar no pão para complementar essa delicia.</h1>
                        </div>
                        <br><br>
                        <div class="grade">
                            <div class="content">                            
                                <input class="form-check-input" type="radio" name="recheio" id="manteiga" value="manteiga">
                                <label class="form-check-label">Manteiga.</label>
                            </div>
                            <div class="content">
                                <input class="form-check-input" type="radio" name="recheio" id="requejão" value="requejão">
                                <label class="form-check-label">Requejão.</label>
                            </div>
                            <div class="content">
                                <input class="form-check-input" type="radio" name="recheio" id="maionese" value="maionese">
                                <label class="form-check-label">Maionese.</label>
                            </div>
                            <div class="content">
                                <input class="form-check-input" type="radio" name="recheio" id="margarina" value="margarina">
                                <label class="form-check-label">Margarina</label>
                            </div>
                            <div class="content">
                                <input class="form-check-input" type="radio" name="recheio" id="maionese_vegie" value="maionese_vegie">
                                <label class="form-check-label">Maionese vegie.</label>
                            </div>
                            <div class="content">
                                <input class="form-check-input" type="radio" name="recheio" id="sem_recheio" value="sem_recheio">
                                <label class="form-check-label">Sem recheio.</label>
                            </div>
                        </div>
                        <br><br>
                        <br><br>
                        <br><br>
                    </div>

                    <div id="proteina">
                        <div class="opt" style="background-image: url('')">
                            <h1 id="scrollspyHeading4">Escolha uma proteina para dar sabor ao seu lanche.</h1>
                        </div>
                        <br><br>
                        <div class="grade">
                            <div class="content">                            
                                <input class="form-check-input" type="radio" name="proteina" id="frango" value="frango">
                                <label class="form-check-label">Frango.</label>
                                <h4>&nbsp Adicional de R$ 2,99</h4>
                            </div>
                            <div class="content">
                                <input class="form-check-input" type="radio" name="proteina" id="carne" value="carne">
                                <label class="form-check-label">Carne.</label>
                                <h4>&nbsp Adicional de R$ 2,99</h4>
                            </div>
                            <div class="content">
                                <input class="form-check-input" type="radio" name="proteina" id="vegano" value="vegano">
                                <label class="form-check-label">Vegano.</label>
                                <h4>&nbsp Adicional de R$ 1,99</h4>
                            </div>
                            <div class="content">
                                <input class="form-check-input" type="radio" name="proteina" id="presunto" value="presunto">
                                <label class="form-check-label">presunto</label>
                                <h4>&nbsp Adicional de R$ 1,99</h4>
                            </div>
                            <div class="content">
                                <input class="form-check-input" type="radio" name="proteina" id="mortadela" value="mortadela">
                                <label class="form-check-label">Mortadela</label>
                                <h4>&nbsp Adicional de R$ 1,99</h4>
                            </div>
                            <div class="content">
                                <input class="form-check-input" type="radio" name="proteina" id="peito_de_peru" value="peito_de_peru">
                                <label class="form-check-label">Peito de peru</label>
                                <h4>&nbsp Adicional de R$ 1,99</h4>
                            </div>
                            <div class="content">
                                <input class="form-check-input" type="radio" name="proteina" id="bacom" value="bacom">
                                <label class="form-check-label">Bacom.</label>
                                <h4>&nbsp Adicional de R$ 1,99</h4>
                            </div>
                            <div class="content">
                                <input class="form-check-input" type="radio" name="proteina" id="sem_proteina" value="sem_proteina">
                                <label class="form-check-label">Sem proteina.</label>
                                <h4>&nbspSem Adicional</h4>
                            </div>
                        </div>
                        <br><br>
                        <br><br>
                        <br><br>
                    </div>

                    <div id="queijo">
                        <div class="opt" style="background-image: url('')">
                            <h1 id="scrollspyHeading5">Escolha o queijo perfeito para o seu lanche.</h1>
                        </div>
                        <br><br>
                        <div class="grade">
                            <div class="content">                            
                                <input class="form-check-input" type="radio" name="queijo" id="cheddar" value="cheddar">
                                <label class="form-check-label">Cheddar.</label>
                                <h4>&nbsp Adicional de R$ 0,99</h4>
                            </div>
                            <div class="content">
                                <input class="form-check-input" type="radio" name="queijo" id="mussarela" value="mussarela">
                                <label class="form-check-label">Mussarela.</label>
                                <h4>&nbsp Adicional de R$ 0,99</h4>
                            </div>
                            <div class="content">
                                <input class="form-check-input" type="radio" name="queijo" id="suiço" value="suiço">
                                <label class="form-check-label">Suiço.</label>
                                <h4>&nbsp Adicional de R$ 0,99</h4>
                            </div>
                            <div class="content">
                                <input class="form-check-input" type="radio" name="queijo" id="provolone" value="provolone">
                                <label class="form-check-label">Provolone</label>
                                <h4>&nbsp Adicional de R$ 0,99</h4>
                            </div>
                            <div class="content">
                                <input class="form-check-input" type="radio" name="queijo" id="gorgozola" value="gorgozola">
                                <label class="form-check-label">Gorgonzola</label>
                                <h4>&nbsp Adicional de R$ 0,99</h4>
                            </div>
                            <div class="content">
                                <input class="form-check-input" type="radio" name="queijo" id="parmezao" value="parmezao">
                                <label class="form-check-label">Parmezão.</label>
                                <h4>&nbsp Adicional de R$ 0,99</h4>
                            </div>
                            <div class="content">
                                <input class="form-check-input" type="radio" name="queijo" id="sem_queijo" value="sem_queijo">
                                <label class="form-check-label">Sem queijo.</label>
                                <h4>&nbsp Sem Adicional</h4>
                            </div>
                        </div>
                        <br><br>
                        <br><br>
                        <br><br>
                    </div>

                    <div id="complemento">
                        <div class="opt" style="background-image: url('')">
                            <h1 id="scrollspyHeading6">Escolha um complemento que adicione mais sabor ao seu lanche.</h1>
                        </div>
                        <br><br>
                        <div class="grade">
                            <div class="content">                            
                                <input class="form-check-input" type="checkbox" name="catupiry" id="catupiry" value="catupiry" >
                                <label class="form-check-label" for="flexCheckDefault">Catupiry.</label>
                                <h4>&nbsp Adicional de R$ 2,99</h4>
                            </div>
                            <div class="content">
                                <input class="form-check-input" type="checkbox" name="cheddar_cremoso" id="cheddar_cremoso" value="cheddar_cremoso" >
                                <label class="form-check-label" for="flexCheckDefault">Cheddar Cremoso.</label>
                                <h4>&nbsp Adicional de R$ 2,99</h4>
                            </div>
                            <div class="content">
                                <input class="form-check-input" type="checkbox" name="cream_cheese" id="cream_cheese" value="cream_cheese" >
                                <label class="form-check-label" for="flexCheckDefault">Cream Cheese.</label>
                                <h4>&nbsp Adicional de R$ 2,99</h4>
                            </div>
                            <div class="content">
                                <input class="form-check-input" type="checkbox" name="pate_peru" id="pate_peru" value="pate_peru" >
                                <label class="form-check-label" for="flexCheckDefault">Patê de peito de peru.</label>
                                <h4>&nbsp Adicional de R$ 2,99</h4>
                            </div>
                            <div class="content">
                                <input class="form-check-input" type="checkbox" name="bacom" id="bacom" value="bacom" >
                                <label class="form-check-label" for="flexCheckDefault">Bacom.</label>
                                <h4>&nbsp Adicional de R$ 2,99</h4>
                                </div>
                            <div class="content">
                                <input class="form-check-input" type="checkbox" name="salame" id="salame" value="salame" >
                                <label class="form-check-label" for="flexCheckDefault">Salame.</label>
                                <h4>&nbsp Adicional de R$ 2,99</h4>
                            </div>
                            <div class="content">
                                <input class="form-check-input" type="checkbox" name="dobro_queijo" id="dobro_queijo" value="dobro_queijo" >
                                <label class="form-check-label" for="flexCheckDefault">Dobro de Queijo.</label>
                                <h4>&nbsp Adicional de R$ 4,99</h4>
                            </div>
                            <div class="content">
                                <input class="form-check-input" type="checkbox" name="dobro_proteina" id="dobro_proteina" value="dobro_proteina" >
                                <label class="form-check-label" for="flexCheckDefault">Dobro de Proteina.</label>
                                <h4>&nbsp Adicional de R$ 6,99</h4>

                            </div>
                        </div>
                        <br><br>
                        <br><br>
                        <br><br>
                    </div>

                    <div id="salada">
                        <div class="opt" style="background-image: url('')">
                            <h1 id="scrollspyHeading7">Escolha uma salada que deixe o seu lanche ainda mais perfeito.</h1>
                        </div>
                        <div class="content">

                        </div>
                        <br><br>
                        <br><br>
                        <br><br>
                    </div>

                    <div id="tempero">
                        <div class="opt" style="background-image: url('')">
                            <h1 id="scrollspyHeading8">Escolha um tempero para dar ainda mais sabor a essa perfeição.</h1>
                        </div>
                        <div class="content">

                        </div>
                        <br><br>
                        <br><br>
                        <br><br>
                    </div>

                    <div id="molho">
                        <div class="opt" style="background-image: url('')">
                            <h1 id="scrollspyHeading9">Escolha um molho para finalizar o seu lanche ideal.</h1>
                        </div>
                        <div class="content">

                        </div>
                        <br><br>
                        <br><br>
                        <br><br>
                    </div>
                    
                    <div id="scrollspyHeading10" style="display: flex; margin: auto;" >
                        <input type="submit" name="submit" class="btn btn-primary btn-lg" value="Finalizar o pedido" style="margin-left: auto; margin-right: 1%;">
                        <input type="reset" name="reset" class="btn btn-primary btn-lg" value="Desfazer" style="margin-right: auto;"  >
                    </div>                
                </form>


                <?php
                    $boolTamanho = $boolPao = $boolRecheio = $boolProteina = $boolQueijo = false;
                    $boolComplemento = false;

                    $preco = 0;


                    if ( empty($_POST["tamanho"]) ) {
                        $boolTamanho = false;
                    } else {
                        $boolTamanho = true;
                    }

                    if ( empty($_POST["pao"]) ) {
                        $boolPao = false;
                    } else {
                        $boolPao = true;
                    }

                    if ( empty($_POST["recheio"]) ) {
                        $boolRecheio = false;
                    } else {
                        $boolRecheio = true;
                    }

                    if ( empty($_POST["proteina"]) ) {
                        $boolProteina = false;
                    } else {
                        $boolProteina = true;
                    }

                    if ( empty($_POST["queijo"]) ) {
                        $boolQueijo = false;
                    } else {
                        $boolQueijo = true;
                    }

                    if(isset($_POST['catupiry']) || isset($_POST['cheddar_cremoso']) || isset($_POST['cream_cheese']) || isset($_POST['pate_peru']) || isset($_POST['bacom']) || isset($_POST['salame']) || isset($_POST['dobro_queijo']) || isset($_POST['dobro_proteina'])){
                        $boolComplemento = true;
                    }else{
                        $boolComplemento = false;
                    }

                    if($boolTamanho && $boolPao && $boolRecheio && $boolProteina && $boolQueijo === true){
                        switch($_POST["tamanho"]){
                            case 'pequeno':{
                                $preco += 6.99;
                                break;
                            }
                            case'medio':{
                                $preco += 10.99;
                                break;
                            }
                            case 'grande':{
                                $preco += 14.99;
                                break;
                            }
                            case'colossal':{
                                $preco += 18.99;
                                break;
                            }
                        }

                        

                        if($boolComplemento == false){
                            echo "<div style='display: flex; margin: auto;'>
                                    <h5 id='falta' style='margin-left: 40%; margin-right: auto;'><br>
                                        Voce não escolheu um complemento.
                                    </h5>    
                                </div>";
                        }

                        echo "<div style='display: flex; margin: auto;'>
                                <h5 id='falta' style='margin-left: 40%; margin-right: auto;'><br>
                                    confira seu pedido : R$", $preco, "<br>
                                    tamanho: ", $tamanho ,"<br>
                                    Pão: ", $pao ,"<br>
                                    recheio: ", $recheio, "<br>
                                    proteina: ", $proteina, "<br>
                                    queijo: ", $queijo, "<br>
                                </h5>    
                              </div>";
                    }else{
                        echo "<br><br> <div style='display: flex; margin: auto;'> <h5 id='falta' style='margin-left: auto; margin-right: auto;'> Parece que seu pedido esta incompleto, Faltou escolher";
                        if ( $boolTamanho == false ) {
                            echo " o tamanho";
                        }
                        if ( $boolPao == false ) {
                            echo " o pão";
                        }
                        if ( $boolRecheio == false ) {
                            echo " o recheio";
                        }
                        if ( $boolProteina == false ) {
                            echo " a proteina";
                        }
                        if ( $boolQueijo == false ) {
                            echo " o queijo";
                        }
                            
                        echo " do lanche.</h5>";    
                    }
                ?>
            </div>
        </body>
    </html>