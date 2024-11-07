<?php

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
                    <div class="titulo-perfil">
                        <h1>Cadastrar Usuario</h1>
                    </div>
                    <div class="info-perfil-cadastrar">
                        <div class="info-int-1">
                            <i class="fa-solid fa-user-plus"></i>
                        </div>
                        <div class="hr-horizontal"></div>
                        <div class="info-int-2">
                            <form action="../../../controller/scripts/usuarios/cadastrar_usuario.php" method="POST">
                                <div class="cadastrar-nome">
                                    <label for="">Nome:</label>
                                    <input name="nome" type="text" placeholder="Primeiro nome">
                                </div>
                                <div class="cadastrar-nome">
                                    <label for="">Sobrenome:</label>
                                    <input name="sobrenome" type="text" placeholder="Ultimo nome">
                                </div>
                                <div class="cadastrar-usuario">
                                    <label for="">Usuario:</label>
                                    <input name="usuario" type="text" placeholder="Digite o nome de usuario">
                                </div>
                                <div class="cadastrar-email">
                                    <label for="">E-mail:</label>
                                    <input name="email" type="text" placeholder="Digite o e-mail">
                                </div>
                                <div class="cadastrar-senha">
                                    <label for="">Senha:</label>
                                    <input name="password" type="password" placeholder="Digite a senha">
                                </div>
                                <div class="cadastrar-senha">
                                    <label for="">Confirme a senha:</label>
                                    <input name="passwordConfirm" type="password" placeholder="Confirme a Senha">
                                </div>
                                <div class="cadastrar-telefone">
                                    <label for="">telefone:</label>
                                    <input name="telefone" type="text" id="telefone" placeholder="(00) 00000-0000" maxlength="15" minlength="15" required>
                                </div>
                                <div class="cadastrar-cpf">
                                    <label for="">CPF:</label>
                                    <input name="cpf" id="cpf" maxlength="14" minlength="14" placeholder="000.000.000-00" type="text" required>
                                </div>
                                <div class="cadastrar-acesso">
                                    <label for="">Acesso:</label>
                                    <select name="permissao" id="">
                                        <option value="1">Cliente</option>
                                        <option value="2">Estagiario</option>
                                        <option value="3">Gerente</option>
                                        <option value="4">Administrador</option>
                                    </select>
                                </div>
                                <div class="notificacao">
                                    <p>Verifique se todos dados estão corretos.</p>
                                </div>
                                <div class="links">
                                    <button>Cadastrar</button>
                                    <a href="../usuarios/home_usuarios.php">Cancelar</a>
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