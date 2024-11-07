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
                <a href="home_equipe.php">Equipe</a>
                <a class="active" href="home.php">Perfil</a>
                <a href="../../controller/scripts/login/logout.php"><i class="fa-solid fa-arrow-right-from-bracket"></i></a>
            </div>
        </div>
    </section>
    <section id="background">
        <div class="content">
            <div class="content-int">
                <div class="basic-info">
                    <div class="titulo-perfil">
                        <h1>Dados do cadastro</h1>
                    </div>
                    <div class="info-perfil">
                        <div class="info-int-1">
                            <i class="fa-solid fa-circle-user"></i>
                            <div class="links">
                                <a href="usuario/verificar_senha.php">Alterar senha</a>
                                <a href="usuario/atualizar_cadastro.php">Alterar dados</a>
                            </div>
                        </div>
                        <div class="hr-horizontal"></div>
                        <div class="info-int-2">
                            <div class="nome">
                                <label for="">Nome:</label>
                                <input name="nome" type="text" value="<?php echo $_SESSION['SESSION_NOME'];?>&nbsp;<?php echo $_SESSION['SESSION_SOBRENOME'];?>" readonly>
                            </div>
                            <div class="usuario">
                                <label for="">Usuario:</label>
                                <input type="text" value="<?php echo $_SESSION['SESSION_USUARIO'];?>">
                            </div>
                            <div class="email">
                                <label for="">E-mail:</label>
                                <input type="text" value="<?php echo $_SESSION['SESSION_EMAIL'];?>" readonly>
                            </div>
                            <div class="telefone">
                                <label for="">telefone:</label>
                                <input type="text" value="<?php echo $_SESSION['SESSION_TELEFONE'];?>" readonly>
                            </div>
                            <div class="cpf">
                                <label for="">CPF:</label>
                                <input type="text" value="<?php echo $_SESSION['SESSION_CPF'];?>" readonly>
                            </div>
                            <div class="acesso">
                                <label for="">Cadastro: </label>
                                <input type="text" value="<?php echo $_SESSION['SESSION_CARGO'];?>" readonly>
                            </div>
                            <div class="notificacao">
                                <p>Atenção! mantenha os seus dados atualizados</p>
                            </div>
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