<?php

?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/login.css">
    <link rel="stylesheet" href="#">
    <title>Faça seu Login</title>
</head>

<body>
    <div class="container">

        <header>

            <div class="desc">
                <h1>Aproveite para desfrutar das funcionalidades do nosso Site!</h1>
            </div>

        </header>

        <div class="card">

            <div class="img-center">
                <img src="img/Security On-amico.svg">
            </div>

            <form action="action" method="post">
                <div class="inf">
                    <h2>Informe seu Email e Senha para se Autenticar.</h2>
                </div>

                <div class="login">

                    <label for="email"></label>
                    <input type="text" placeholder="Email" name="email" required>

                    <label for="senha"></label>
                    <input type="password" placeholder="Senha" name="senha" required>

                    <div class="redf">
                        <a href="#">Redefinir Senha</a>
                    </div>

                    <div class="button">
                        <input type="submit" class="btn" value="Entrar">
                    </div>

                </div>
            </form>
        </div>
    </div>
</body>

</html>