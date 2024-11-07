<?php

include('../../scripts/usuarios/mostra_cad.php');

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
        <div class="content">
            <div class="content-int">
                <div class="basic-info">
                    <div class="titulo-perfil">
                        <h1>Visualizar cadastro</h1>
                    </div>
                    <div class="info-perfil-atualizar">
                        <div class="info-int-1">
                            <i class="fa-solid fa-user"></i>                        </div>
                        <div class="hr-horizontal"></div>
                        <div class="info-int-2">
                            <form action="">
                                <div class="atualizar-nome">
                                    <label for="">Codigo:</label>
                                    <input name="id" type="text" value="<?php echo $id ?>" readonly>
                                </div>
                                <div class="atualizar-nome">
                                    <label for="">Nome:</label>
                                    <input name="nome" type="text" value="<?php echo $nome ?>" readonly>
                                </div>
                                <div class="atualizar-nome">
                                    <label for="">Sobrenome:</label>
                                    <input name="sobrenome" type="text" value="<?php echo $sobrenome ?>" readonly>
                                </div>
                                <div class="atualizar-usuario">
                                    <label for="">Usuario:</label>
                                    <input type="text" value="<?php echo $usuario ?>" readonly>
                                </div>
                                <div class="atualizar-email">
                                    <label for="">E-mail:</label>
                                    <input name="email" type="email" value="<?php echo $email ?>" readonly>
                                </div>
                                <div class="atualizar-telefone">
                                    <label for="">telefone:</label>
                                    <input name="telefone" type="text" id="telefone" placeholder="(00) 00000-0000" maxlength="15" minlength="12" value="<?php echo $telefone ?>" required readonly>
                                </div>
                                <div class="atualizar-cpf">
                                    <label for="">CPF:</label>
                                    <input  name="cpf" id="cpf" maxlength="14" minlength="14" type="text" value="<?php echo $cpf ?>" required readonly>
                                </div>
                                <div class="atualizar-acesso">
                                    <label for="">Acesso:</label>
                                    <input type="text" value="<?php echo $cargo ?>" readonly>
                                </div>
                                <div class="links">
                                    <a href="clientes.php">Voltar</a>
                                </div>
                            </form>
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