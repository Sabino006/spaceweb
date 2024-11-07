<?php

  // A sessão precisa ser iniciada em cada página diferente
  if (!isset($_SESSION)) session_start();

  $nivel_necessario = 2;

  // Verifica se não há a variável da sessão que identifica o usuário
  if (!isset($_SESSION["SESSION_ID"]) OR ($_SESSION["SESSION_PERMISSAO"] < $nivel_necessario)) {
      // Destrói a sessão por segurança
      session_destroy();
      // Redireciona o visitante de volta pro login
      header("Location: home.php"); 
      exit;
  }

  ?>

<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Space Tech</title>
        <link rel="icon" href="../../resources/img/logo/logo10_30_154324.png">
        <link rel="stylesheet" href="../../resources/css/home.css">
        <script src="https://kit.fontawesome.com/a084343986.js" crossorigin="anonymous"></script>
    </head>
<body>
    <section id="navbar">
        <div class="nav">
            <div class="logo">
                <img src="../../resources/img/logo/logo10_30_154324.png" alt="">
                <p class="logo-space">Space</p>
                <p class="logo-tech">Web</p>
            </div>
            <div class="links">
                <a href="atendimento/criar_atendimento.php">Atendimento</a>
                <a href="home_equipe.php" class="active">Equipe</a>
                <a href="home.php">Perfil</a>
                <a href="../../controller/scripts/login/logout.php"><i class="fa-solid fa-arrow-right-from-bracket"></i></a>
            </div>
        </div>
    </section>
    <section id="background">
        <div class="content-equipe">
            <div class="links">
                <div class="line">
                    <a href="chamados/home_chamados.php"><i class="fa-solid fa-headset"></i><p>Chamados</p></a>
                    <a href="usuarios/home_usuarios.php"><i class="fa-solid fa-user-gear"></i><p>Usuarios</p></a>
                </div>
                <div class="line">
                    <a href="pedidos/home_pedidos.php"><i class="fa-regular fa-handshake"></i><p>Pedidos</p></a>
                    <a href="atendimento/home_atendimento.php"><i class="fa-solid fa-id-card-clip"></i><p>Atendimento</p></a>
                </div>
            </div>
        </div>
    </section>

    <footer>
        <section class="footer">
            <span>Todos direitos reservados &copy; <p class="footer-space">Space</p><p class="footer-tech">WEB</p></span>
        </section>
    </footer>
</body>
</html>