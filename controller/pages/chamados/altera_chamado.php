<?php

include('../../scripts/chamados/mostra_chamado.php');

  // A sessão precisa ser iniciada em cada página diferente
  if (!isset($_SESSION)) session_start();

  $nivel_necessario = 4;

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
                <div class="chamados_alterar">
                    <div class="chamado_titulo">
                        <h1>Atendimento de chamado</h1>
                    </div>
                    <form action="../../../controller/scripts/chamados/atualizar_chamado.php" method="POST">
                        <div class="codigo">
                            <label for="">Codigo</label>
                            <input name="id" type="text" value="<?php echo $codigo ?>" readonly>
                        </div>
                        <div class="codigo">
                            <label for="">ID Usuario</label>
                            <input type="text" value="<?php echo $id_usuario ?>" readonly>
                        </div>
                        <div class="usuario">
                            <label for="">Usuario</label>
                            <input type="text" value="<?php echo $nome_usuario ?>" readonly>
                        </div>
                        <div class="tipo">
                            <label for="">Tipo</label>
                            <input type="text" value="<?php echo $tipo ?>" readonly>
                        </div>
                        <div class="descricao">
                            <label for="">Descrição</label>
                            <textarea readonly><?php echo $descricao ?></textarea>
                        </div>
                        <div class="nivel">
                            <label for="">Nivel</label>
                            <input type="email" value="<?php echo $nivel ?>" readonly>
                        </div>
                        <div class="status">
                            <label for="">Status</label>
                            <select name="status" id="">
                                <option value="em aberto" selected>Em aberto</option>
                                <option value="em andamento">Em andamento</option>
                                <option value="finalizado">Finalizado</option>
                            </select>
                        </div>
                        <div class="codigo">
                            <label for="">ID Analista</label>
                            <input name="id_analista" type="text" value="<?php echo $_SESSION['SESSION_ID'] ?>" required>
                        </div>
                        <div class="usuario">
                            <label for="">Analista:</label>
                            <input name="nome_analista" type="text" value="<?php echo $_SESSION['SESSION_NOME'] ?>&nbsp;<?php echo $_SESSION['SESSION_SOBRENOME'] ?>" readonly>
                        </div>
                        <div class="links">
                            <button>Atualizar</button>
                            <a href="../chamados/chamados.php">Cancelar</a>
                        </div>
                    </form>
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