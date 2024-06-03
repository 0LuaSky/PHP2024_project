<!DOCTYPE html>
    <html lang="en" data-bs-theme="dark">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>login</title>

            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>


            <style>
                .main{
                    float: left;
                } 
                .image{
                    background-image: url("https://images3.alphacoders.com/868/868525.jpg");
                    float: left;
                }
                .text{
                    float: left;
                }


            </style>
        </head>
        <body>
            
            <div class="main">
                <div class="image">
                    <img src="https://images3.alphacoders.com/868/868525.jpg" alt="alternatetext"  width="500" height="600">

                </div>

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

            <script>
            var input = document.getElementById("myInput");
                    input.addEventListener("keypress", function(event) {
                        if (event.key === "Enter") {
                            event.preventDefault();
                            document.getElementById("myBtn").click();
                        }
                    });

                function entrar(){
                    nome = document.form.user.value;
                    window.alert("Bem Vindo(a) " + nome);
                    window.location.href = "http://localhost/php2024_project/php2024_project/main.php";
                }
            </script>
        </body>
    </html>