<?php

  // A sessão precisa ser iniciada em cada página diferente
  if (!isset($_SESSION)) session_start();

  $nivel_necessario = 1;

  // Verifica se não há a variável da sessão que identifica o usuário
  if (!isset($_SESSION["SESSION_ID"]) OR ($_SESSION["SESSION_PERMISSAO"] < $nivel_necessario)) {
      // Redireciona o visitante de volta pro login
      header("Location: ../../../controller/pages/home.php"); 
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
            <div class="criar_atendimento">
                <form action="../../scripts/atendimento/cadastrar_atendimento.php" method="POST">
                    <div class="titulo">
                        <h2>Solicitar atendimento</h2>
                    </div>
                    <div class="codigo">
                        <label for="">codigo do cliente</label>
                        <input name="id_cliente" type="text" value="<?php echo $_SESSION['SESSION_ID'] ?>" readonly>
                    </div>
                    <div class="nome">
                        <label for="">nome</label>
                        <input name="nome_cliente" type="text" value="<?php echo $_SESSION['SESSION_NOME'] ?>&nbsp;<?php echo $_SESSION['SESSION_SOBRENOME'] ?>" readonly>
                    </div>
                    <div class="cpf">
                        <label for="">cpf</label>
                        <input name="cpf_cliente" type="text" value="<?php echo $_SESSION['SESSION_CPF'] ?>" readonly>
                    </div>
                    <div class="email">
                        <label for="">email</label>
                        <input name="email_cliente" type="text" value="<?php echo $_SESSION['SESSION_EMAIL'] ?>" readonly>
                    </div>
                    <div class="telefone">
                        <label for="">telefone</label>
                        <input name="telefone_cliente" type="text" value="<?php echo $_SESSION['SESSION_TELEFONE'] ?>" readonly>
                    </div>
                    <div class="servico">
                        <label for="">Serviço</label>
                        <select name="servico">
                            <option value="web design" selected>Web Design</option>
                            <option value="desenvolvimento de software">Desenvolvimento de software</option>
                            <option value="desenvolvimento de sites">Desenvolvimento de sites</option>
                            <option value="outros">Outros</option>
                        </select>
                    </div>
                    <div class="links">
                        <button>solicitar</button>
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