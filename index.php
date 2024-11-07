<?php
session_start();
?>

<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Space Tech</title>
        <link rel="icon" href="resources/img/logo/logo10_30_154324.png">
        <link rel="stylesheet" href="resources/css/style.css">
        <script src="https://kit.fontawesome.com/a084343986.js" crossorigin="anonymous"></script>
        <script src="resources/js/mascaras/cpf.js"></script>
        <script src="resources/js/mascaras/telefone.js"></script>
    </head>
<body>
    <section id="background">
        <div class="body-max">
            <div class="body-login">
                <form action="controller/scripts/login/login.php" method="POST">
                    <div class="logo">
                        <img src="resources/img/logo/logo10_30_154324.png" alt="">
                        <p class="logo-space">Space</p>
                        <p class="logo-tech">Web</p>
                    </div>
                    <div class="usuario">
                        <label for="">Usuario</label>
                        <input name="usuario" type="text" required>
                    </div>
                    <div class="password">
                        <label for="">Senha</label>
                        <input name="password" type="password">
                    </div>
                    <div class="links">
                        <button>Entrar</button>
                        <a href="registro.php">Registrar-se</a>
                    </div>
                </form>
            </div>
        </div>
    </section>
</body>
</html>