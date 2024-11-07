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
        </div>
    </section>
    <section id="background">
        <div class="content">
            <div class="content-int">
                <div class="basic-info">
                    <div class="titulo-perfil">
                        <h1>Confirmar senha</h1>
                    </div>
                    <div class="info-perfil-atualizar">
                        <div class="info-int-1">
                            <i class="fa-solid fa-user-gear"></i>
                        </div>
                        <div class="hr-horizontal"></div>
                        <div class="info-int-2">
                            <form action="../../scripts/usuario/verifica_password.php" method="POST">
                                <div class="atualizar-usuario">
                                    <label for="">Usuario: </label>
                                    <input name="usuario" value="<?php echo $_SESSION['SESSION_USUARIO'] ?>" type="text" readonly>
                                </div>
                                <div class="atualizar-password">
                                    <label for="">Senha:</label>
                                    <input name="password" type="password">
                                </div>
                                <div class="notificacao">
                                    <p>Digite sua senha atual para continuar</p>
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