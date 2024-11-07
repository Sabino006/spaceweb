<?php

  // A sessão precisa ser iniciada em cada página diferente
  if (!isset($_SESSION)) session_start();

  $nivel_necessario = 2;

  // Verifica se não há a variável da sessão que identifica o usuário
  if (!isset($_SESSION["SESSION_ID"]) OR ($_SESSION["SESSION_PERMISSAO"] < $nivel_necessario)) {
      // Redireciona o visitante de volta pro login
      header("Location: ../../../controller/pages/chamados/home_chamados.php"); 
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
                <a href="../home_equipe.php" class="active">Equipe</a>
                <a href="../home.php">Perfil</a>
                <a href="../../../controller/scripts/login/logout.php">Sair</a>
            </div>
        </div>
    </section>
    <section id="background">
        <div class="content">
            <div class="content-int">
                <div class="basic-info">
                    <div class="info-chamado">
                        <form action="../../../controller/scripts/chamados/cadastrar_chamado.php" method="POST">
                            <div class="line">
                                <div class="usuario">
                                    <label for="">Nome </label>
                                    <input name="nome" type="text" value="<?php echo $_SESSION['SESSION_NOME'] ?>&nbsp;<?php echo $_SESSION['SESSION_SOBRENOME'] ?>" readonly>
                                </div>
                            </div>
                            <div class="line">
                                <div class="tipo">
                                    <label for="">Tipo </label>
                                    <select name="tipo" id="" required>
                                        <option selected value="cadastro">Cadastro</option>
                                        <option value="pedido">Pedido</option>
                                        <option value="atendimento">Atendimento</option>
                                        <option value="outro">Outro</option>
                                    </select>
                                </div>
                                <div class="nivel">
                                    <label for="">Nivel de urgencia: </label>
                                    <select name="nivel" id="" required>
                                        <option value="baixo" selected>Baixo</option>
                                        <option value="medio">Média</option>
                                        <option value="alto">Alto</option>
                                        <option value="urgente">Urgente</option>
                                    </select>
                                </div>
                            </div>
                            <div class="line-desc">
                                <label for="">Descrição do chamado: </label>
                                <textarea name="descricao" id=""></textarea>
                            </div>
                            <div class="line-links">
                                <button>Confirmar</button>
                                <a href="../chamados/home_chamados.php">Cancelar</a>
                            </div>
                        </form>
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