<?php

  // A sessão precisa ser iniciada em cada página diferente
  if (!isset($_SESSION)) session_start();

  $nivel_necessario = 1;

  // Verifica se não há a variável da sessão que identifica o usuário
  if (!isset($_SESSION["SESSION_ID"]) OR ($_SESSION["SESSION_PERMISSAO"] < $nivel_necessario)) {
      // Destrói a sessão por segurança
      session_destroy();
      // Redireciona o visitante de volta pro login
      header("Location: ../../../index.php"); 
      exit;
  }

  ?>

<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Space Tech</title>
        <link rel="icon" href="../../../resources/img/logo/logo10_30_154324.png">
        <link rel="stylesheet" href="../../../resources/css/home.css">
        <script src="https://kit.fontawesome.com/a084343986.js" crossorigin="anonymous"></script>
    </head>
<body>
    <section id="navbar">
        <div class="nav">
            <div class="logo">
                <img src="../../../resources/img/logo/logo10_30_154324.png" alt="">
                <p class="logo-space">Space</p>
                <p class="logo-tech">Web</p>
            </div>
            <div class="links">
                <a href="../atendimento/criar_atendimento.php">Atendimento</a>
                <a href="../home_equipe.php">Equipe</a>
                <a href="../home.php" class="active">Perfil</a>
                <a href="../../../controller/scripts/login/logout.php">Sair</a>
            </div>
    </section>
    <section id="background">
        <div class="content">
            <div class="content-int">
                <div class="basic-info">
                    <div class="titulo-perfil">
                        <h1>Alterar senha</h1>
                    </div>
                    <div class="info-perfil-atualizar">
                        <div class="info-int-1">
                            <i class="fa-solid fa-user-gear"></i>
                        </div>
                        <div class="hr-horizontal"></div>
                        <div class="info-int-2">
                            <form action="../../scripts/usuario/alterar_senha.php" method="POST">
                                <div class="atualizar-password">
                                    <label for="">Senha: </label>
                                    <input name="new_password" type="password" placeholder="Digite sua nova senha" minlength="6" maxlength="12" required >
                                </div>
                                <div class="atualizar-password">
                                    <label for="">Confirme: </label>
                                    <input name="confirm_password" type="password" placeholder="Confirme sua senha" required minlength="6" maxlength="12" >
                                </div>
                                <div class="notificacao">
                                    <p>Digite sua nova senha</p>
                                </div>
                                <div class="links">
                                    <button>confirmar</button>
                                    <a href="../home.php">Cancelar</a>
                                </div>
                            </form>
                        </div>
                    </div>
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