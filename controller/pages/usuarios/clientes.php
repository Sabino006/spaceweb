<?php

include('../../scripts/usuarios/list_usuario.php');

  // A sessão precisa ser iniciada em cada página diferente
  if (!isset($_SESSION)) session_start();

  $nivel_necessario = 2;

  // Verifica se não há a variável da sessão que identifica o usuário
  if (!isset($_SESSION["SESSION_ID"]) OR ($_SESSION["SESSION_PERMISSAO"] < $nivel_necessario)) {
      // Redireciona o visitante de volta pro login
      header("Location: home_usuarios.php"); 
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
        <div class="usuarios">
            <table>
                <tr class="topo">
                    <td>Código</td>
                    <td>Usuario</td>
                    <td>Nome</td>
                    <td>CPF</td>
                    <td>Telefone</td>
                    <td>E-mail</td>
                    <td>Cargo</td>
                    <td colspan="3">&nbsp;</td>
                </tr>
                <?php while($clientes = $conCliente->fetch_array()) {?>
                <tr class="conteudo">
                    <td><?php echo $clientes["ID"];  ?></td>
                    <td><?php echo $clientes["USUARIO"];  ?></td>
                    <td><?php echo $clientes["NOME"];  ?>&nbsp;<?php echo $clientes["SOBRENOME"];  ?></td>
                    <td><?php echo $clientes["CPF"];  ?></td>
                    <td><?php echo $clientes["TELEFONE"];  ?></td>
                    <td><?php echo $clientes["EMAIL"];  ?></td>
                    <td><?php echo $clientes["NOME_CARGO"];  ?></td>
                    <td><a href="user_edit.php?id=<?php echo $clientes['ID'] ?>"><i class="fa-solid fa-pen-to-square"></i></a></td>
                    <td><a href="view_clientes.php?id=<?php echo $clientes['ID'] ?>"><i class="fa-solid fa-eye"></i></a></td>
                    <td><a href="../../scripts/usuarios/deletar.php?id=<?php echo $clientes['ID'] ?>"><i class="fa-regular fa-trash-can"></i></a></td>
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