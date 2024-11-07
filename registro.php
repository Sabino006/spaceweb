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
            <div class="body-registro">
                <form action="controller/scripts/login/registro_usuario.php" method="POST">
                    <div class="logo">
                        <img src="resources/img/logo/logo10_30_154324.png" alt="">
                        <p class="logo-space">Space</p>
                        <p class="logo-tech">Web</p>
                    </div>
                    <div class="usuario">
                        <label for="">Usuario</label>
                        <input name="usuario" type="text" required>
                    </div>
                    <div class="nome">
                        <label for="">Primeiro nome</label>
                        <input name="nome" type="text" required>
                    </div>
                    <div class="sobrenome">
                        <label for="">Ultimo nome</label>
                        <input name="sobrenome" type="text" required>
                    </div>
                    <div class="telefone">
                        <label for="">Telefone</label>
                        <input name="telefone" type="text" id="telefone" placeholder="(00) 00000-0000" maxlength="15" minlength="15" required>
                    </div>
                    <div class="sobrenome">
                        <label for="">CPF</label>
                        <input name="cpf" id="cpf" maxlength="14" minlength="14" type="text" required>
                    </div>
                    <div class="email">
                        <label for="">E-mail</label>
                        <input name="email" type="email" required>
                    </div>
                    <div class="password">
                        <label for="">Senha</label>
                        <input name="password" type="password" required>
                    </div>
                    <div class="password">
                        <label for="">Confirme sua senha</label>
                        <input name="passwordConfirm" type="password" required>
                    </div>
                    <div class="links">
                        <button>Registrar-se</button>
                        <a href="index.php">Entrar</a>
                    </div>
                </form>
            </div>
        </div>
    </section>
</body>
</html>