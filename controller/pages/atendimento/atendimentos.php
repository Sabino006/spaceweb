<?php

include('../../scripts/atendimento/listar_atendimento.php');

  // A sessão precisa ser iniciada em cada página diferente
  if (!isset($_SESSION)) session_start();

  $nivel_necessario = 2;

  // Verifica se não há a variável da sessão que identifica o usuário
  if (!isset($_SESSION["SESSION_ID"]) OR ($_SESSION["SESSION_PERMISSAO"] < $nivel_necessario)) {
      // Redireciona o visitante de volta pro login
      header("Location: ../../../controller/pages/atendimento/meus_atendimentos.php"); 
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
                <a href="../atendimento/criar_atendimento.php" class="active">Atendimento</a>
                <a href="../home_equipe.php">Equipe</a>
                <a href="../home.php">Perfil</a>
                <a href="../../../controller/scripts/login/logout.php">Sair</a>
            </div>
        </div>
    </section>
    <section id="background">
        <div class="atendimentos">
            <table>
                <tr class="topo">
                    <td>Código</td>
                    <td>Cliente</td>
                    <td>Serviço</td>
                    <td>status</td>
                    <td>Vendedor</td>
                    <td colspan="3">&nbsp;</td>
                </tr>
                <?php while($atendimento = $con->fetch_array()) {?>
                <tr class="conteudo">
                    <td><?php echo $atendimento["ID"];  ?></td>
                    <td><?php echo $atendimento["NOME_CLIENTE"];  ?></td>
                    <td><?php echo $atendimento["SERVICO"];  ?></td>
                    <td><?php echo $atendimento["STATUS_ATENDIMENTO"];  ?></td>
                    <td><?php echo $atendimento["NOME_VENDEDOR"];  ?></td>
                    <td><a href="alterar_atendimento.php?id=<?php echo $atendimento['ID'] ?>"><i class="fa-solid fa-pen-to-square"></i></a></td>
                    <td><a href="view_atendimento.php?id=<?php echo $atendimento['ID'] ?>"><i class="fa-solid fa-eye"></i></a></td>
                    <td><a href="../../scripts/atendimento/deletar_atendimento.php?id=<?php echo $atendimento['ID'] ?>"><i class="fa-regular fa-trash-can"></i></a></td>
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