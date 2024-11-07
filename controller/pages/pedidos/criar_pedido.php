<?php

  // A sessão precisa ser iniciada em cada página diferente
  if (!isset($_SESSION)) session_start();

  $nivel_necessario = 2;

  // Verifica se não há a variável da sessão que identifica o usuário
  if (!isset($_SESSION["SESSION_ID"]) OR ($_SESSION["SESSION_PERMISSAO"] < $nivel_necessario)) {
      // Redireciona o visitante de volta pro login
      header("Location: ../../../controller/pages/pedidos/home_pedidos.php"); 
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
        <script src="../../../resources/js/mascaras/cpf.js"></script>
        <script src="../../../resources/js/mascaras/telefone.js"></script>
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
                    <div class="info-pedido">
                        <form action="../../scripts/pedidos/cadastrar_pedido.php" method="POST">
                            <div class="vendedor">
                                <div class="titulo-vendedor">
                                    <h1>Dados do VENDEDOR</h1>
                                </div>
                                <div class="codigo">
                                    <label for="">Código:</label>
                                    <input name="id_vendedor" type="text" value="<?php echo $_SESSION['SESSION_ID']; ?>" readonly>
                                </div>
                                <div class="nome">
                                    <label for="">Nome: </label>
                                    <input name="nome_vendedor" type="text" value="<?php echo $_SESSION['SESSION_NOME'] ;?>&nbsp;<?php echo $_SESSION['SESSION_SOBRENOME'] ;?>" readonly>
                                </div>
                                <div class="cpf">
                                    <label for="">CPF: </label>
                                    <input name="cpf_vendedor" type="text" value="<?php echo $_SESSION['SESSION_CPF']; ?>" readonly>
                                </div>
                            </div>
                            <div class="hr-horizontal"></div>
                            <div class="pedido">
                                <form action="../../scripts/pedidos/cadastrar_pedido.php" method="POST">
                                    <div class="titulo-pedido">
                                        <h2>Dados do cliente</h2>
                                    </div>
                                    <div class="nome">
                                        <label for="">Nome do cliente</label>
                                        <input name="nome_cliente" type="text" required>
                                    </div>
                                    <div class="email">
                                        <label for="">E-mail do cliente</label>
                                        <input name="email_cliente" type="email" required>
                                    </div>
                                    <div class="cpf">
                                        <label for="">CPF do cliente</label>
                                        <input id="cpf" name="cpf_cliente" maxlength="14" minlength="14" placeholder="000.000.000-00" type="text" required>
                                    </div>
                                    <div class="titulo-pedido">
                                        <h2>Dados do pedido</h2>
                                    </div>
                                    <div class="pedido">
                                        <label for="">Pedido</label>
                                        <input name="titulo" type="text" required>
                                    </div>
                                    <div class="descricao">
                                        <label for="">Descrição do pedido</label>
                                        <textarea name="descricao" placeholder="Digite as informações do pedido" required></textarea>
                                    </div>
                                    <div class="links">
                                        <button>Gerar Pedido</button>
                                        <a href="home_pedidos.php">Cancelar</a>
                                    </div>
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