<?php

include('../../scripts/pedidos/mostra_pedido.php');

  // A sessão precisa ser iniciada em cada página diferente
  if (!isset($_SESSION)) session_start();

  $nivel_necessario = 3;

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
                        <form action="../../scripts/pedidos/atualizar_pedido.php" method="POST">
                            <div class="vendedor">
                                <div class="titulo-vendedor">
                                    <h1>Dados do gerente</h1>
                                </div>
                                <div class="codigo">
                                    <label for="">Código:</label>
                                    <input name="id_gerente" type="text" value="<?php echo $id_gerente ?>" readonly>
                                </div>
                                <div class="nome">
                                    <label for="">Nome: </label>
                                    <input name="nome_gerente" type="text" value="<?php echo $nome_gerente ?>" readonly>
                                </div>
                                <div class="cpf">
                                    <label for="">CPF: </label>
                                    <input name="cpf_gerente" type="text" value="<?php echo $cpf_gerente ?>" readonly>
                                </div>
                                <div class="titulo-vendedor">
                                    <h1>Dados do vendedor</h1>
                                </div>
                                <div class="codigo">
                                    <label for="">Código:</label>
                                    <input name="id_vendedor" type="text" value="<?php echo $id_vendedor ?>" readonly>
                                </div>
                                <div class="nome">
                                    <label for="">Nome: </label>
                                    <input name="nome_vendedor" type="text" value="<?php echo $nome_vendedor ?>" readonly>
                                </div>
                                <div class="cpf">
                                    <label for="">CPF: </label>
                                    <input name="cpf_vendedor" type="text" value="<?php echo $cpf_vendedor ?>" readonly>
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
                                        <input name="nome_cliente" type="text" value="<?php echo $nome_cliente; ?>" required readonly>
                                    </div>
                                    <div class="email">
                                        <label for="">E-mail do cliente</label>
                                        <input name="email_cliente" type="email" value="<?php echo $email_cliente; ?>" required readonly>
                                    </div>
                                    <div class="cpf">
                                        <label for="">CPF do cliente</label>
                                        <input id="cpf" name="cpf_cliente" maxlength="14" minlength="14" type="text" value="<?php echo $cpf_cliente; ?>" required readonly>
                                    </div>
                                    <div class="titulo-pedido">
                                        <h2>Dados do pedido</h2>
                                    </div>
                                    <div class="pedido">
                                        <label for="">Codigo</label>
                                        <input name="id_pedido" type="text" value="<?php echo $id_pedido; ?>" required readonly>
                                    </div>
                                    <div class="pedido">
                                        <label for="">Pedido</label>
                                        <input name="titulo" type="text" value="<?php echo $titulo; ?>" required readonly>
                                    </div>
                                    <div class="status">
                                        <label for="">Status</label>
                                        <input type="text" value=" <?php echo $status; ?>" readonly required>
                                    </div>
                                    <div class="descricao">
                                        <label for="">Descrição do pedido</label>
                                        <textarea name="descricao" required readonly><?php echo $descricao; ?></textarea>
                                    </div>
                                    <div class="links">
                                        <a href="home_pedidos.php">Voltar</a>
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