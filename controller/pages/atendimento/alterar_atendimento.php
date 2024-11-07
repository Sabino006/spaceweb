<?php

include('../../scripts/atendimento/mostrar_atendimento.php');

  // A sessão precisa ser iniciada em cada página diferente
  if (!isset($_SESSION)) session_start();

  $nivel_necessario = 2;

  // Verifica se não há a variável da sessão que identifica o usuário
  if (!isset($_SESSION["SESSION_ID"]) OR ($_SESSION["SESSION_PERMISSAO"] < $nivel_necessario)) {
      // Redireciona o visitante de volta pro login
      header("Location: ../../../controller/atendimento/atendimento.php"); 
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
        <div class="content">
            <div class="alterar_atendimento">
                <form action="../../scripts/atendimento/atualizar_atendimento.php" method="POST">
                    <div class="dados_vendedor">
                        <div class="titulo">
                            <h2>Dados do vendedor</h2>
                        </div>
                        <div class="codigo">
                            <label for="">codigo do vendedor</label>
                            <input name="id_vendedor" type="text" value="<?php echo $_SESSION['SESSION_ID'] ?>" readonly>
                        </div>
                        <div class="nome">
                            <label for="">nome</label>
                            <input name="nome_vendedor" type="text" value="<?php echo $_SESSION['SESSION_NOME'] ?>&nbsp;<?php echo $_SESSION['SESSION_SOBRENOME'] ?>" readonly>
                        </div>
                    </div>
                    <div class="dados_atendimento">
                        <div class="titulo">
                            <h2>dados do atendimento</h2>
                        </div>
                        <div class="codigo">
                            <label for="">codigo do atendimento</label>
                            <input name="id_atendimento" type="text" value="<?php echo $id_atendimento ?>" readonly>
                        </div>
                        <div class="codigo">
                            <label for="">codigo do cliente</label>
                            <input name="id_cliente" type="text" value="<?php echo $id_cliente ?>" readonly>
                        </div>
                        <div class="nome">
                            <label for="">nome</label>
                            <input name="nome_cliente" type="text" value="<?php echo $nome_cliente ?>" readonly>
                        </div>
                        <div class="cpf">
                            <label for="">cpf</label>
                            <input name="cpf_cliente" type="text" value="<?php echo $cpf_cliente ?>" readonly>
                        </div>
                        <div class="email">
                            <label for="">email</label>
                            <input name="email_cliente" type="text" value="<?php echo $email_cliente ?>" readonly>
                        </div>
                        <div class="telefone">
                            <label for="">telefone</label>
                            <input name="telefone_cliente" type="text" value="<?php echo $telefone_cliente ?>" readonly>
                        </div>
                        <div class="servico">
                            <label for="">Serviço</label>
                            <input type="text" value="<?php echo $servico ?>" readonly>
                        </div>
                        <div class="status">
                            <label for="">Status</label>
                            <select name="status_atendimento">
                                <option value="aguardando" selected>aguardando</option>
                                <option value="em andamento">em andamento</option>
                                <option value="finalizado">finalizado</option>
                            </select>
                        </div>
                        <div class="links">
                            <button>Atualizar</button>
                            <a href="atendimentos.php">Voltar</a>
                        </div>
                    </div>
                </form>
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