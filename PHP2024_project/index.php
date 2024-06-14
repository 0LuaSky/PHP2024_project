<!DOCTYPE html>
    <html lang="en" data-bs-theme="dark">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>login</title>

            <!--Requisitando arquivo contendo as bibliotecas do bootstrap-->
            <?php
                require "web_inf/bootsLibs.php"
            ?>

            <!--Configurando front end do sistema-->
            <style>
                .main{
                    /*definindo a organização das caixas dentro do div como flex, permitindo que elementes fiquem lado a lado*/
                    display: flex;
                    justify-content: space-between;
                    align-items: center;
                    margin-top: 1%;
                } 
                .image{
                    margin-left:3%;
                }
                .login{
                    margin: auto;
                }


            </style>
        </head>
        <body>
            
            <div class="main">
                <!--conteiner para inserir uma imagem na pagina-->
                <div class="image">
                    <img src="https://images3.alphacoders.com/868/868525.jpg" alt="alternatetext"  width="860" height="720" style="border-radius:30px;">

                </div>

                <!--conteiner para a area de login-->
                <div class="login">
                    <h2 style="font-size: 50px">FIND FOOD</H2>
                    <h1>Bem vindo(a)</h1>
                    <br>

                    <form action="" method="post" name="form">
                        <div class="mb-3">
                            <label for="formlogin1" class="form-label">nome de usuario</label><br>
                            <input id="myInput" class="formlogin1" type="text" placeholder="Digite aqui" name="user" aria-label=".form-control-lg example"><br>
                            
                            <input id="myBtn" class="btn btn-primary btn-sm" type="button" value="Entrar" onclick="entrar()">
                        </div>
                    </form>
                </div>
            </div>

            <!--permite usar a tecla "enter" para confirmar o envio do form-->
            <script>
            var input = document.getElementById("myInput");
                    input.addEventListener("keypress", function(event) {
                        if (event.key === "Enter") {
                            event.preventDefault();
                            document.getElementById("myBtn").click();
                        }
                    });

                //redireciona para a pagina principal
                function entrar(){
                    nome = document.form.user.value;
                    window.alert("Bem Vindo(a) " + nome);
                    window.location.href = "http://localhost/php2024_project-main/php2024_project/main.php";
                }
            </script>
        </body>
    </html>