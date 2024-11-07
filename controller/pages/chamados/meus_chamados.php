<?php

include('../../scripts/chamados/listar_chamado.php');

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
        <div class="chamados">
            <table>
                <tr class="topo">
                    <td>Código</td>
                    <td>Usuario</td>
                    <td>Tipo</td>
                    <td>Nivel</td>
                    <td>Status</td>
                    <td>Analista</td>
                    <td colspan="2">&nbsp;</td>
                </tr>
                <?php while($chamadosUser = $conUsers->fetch_array()) {?>
                <tr class="conteudo">
                    <td><?php echo $chamadosUser["ID"];  ?></td>
                    <td><?php echo $chamadosUser["NOME_USUARIO"];  ?></td>
                    <td><?php echo $chamadosUser["TIPO"];  ?></td>
                    <td><?php echo $chamadosUser["NIVEL"];  ?></td>
                    <td><?php echo $chamadosUser["STATUS_CHAMADO"];  ?></td>
                    <td><?php echo $chamadosUser["NOME_ANALISTA"];  ?></td>
                    <td><a href="view_chamado.php?id=<?php echo $chamadosUser['ID'] ?>"><i class="fa-solid fa-eye"></i></a></td>
                </tr>
                <?php } ?> 
            </table>
        </div>
    </section>

    <footer>
        <section class="footer">
            <span>Todos direitos reservados &copy; <p class="footer-space">Space</p><p class="footer-tech">WEB</p></span>
        </section>
    </footer>
</body>
</html>