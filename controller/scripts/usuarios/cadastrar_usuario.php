<?php

include('../../scripts/sql/conect.php');

$nome = mysqli_real_escape_string($conect, $_POST['nome']);
$sobrenome = mysqli_real_escape_string($conect, $_POST['sobrenome']);
$usuario = mysqli_real_escape_string($conect, $_POST["usuario"]);
$email = mysqli_real_escape_string($conect, $_POST["email"]);
$cpf = mysqli_real_escape_string($conect, $_POST['cpf']);
$telefone = mysqli_real_escape_string($conect, $_POST['telefone']);
$permissao = mysqli_real_escape_string($conect, $_POST['permissao']);
$password = mysqli_real_escape_string($conect, $_POST['password']);
$passwordConfirm = mysqli_real_escape_string($conect, $_POST['passwordConfirm']);
$passwordConfirmado = md5(md5($_POST['password']));


if ($permissao == 1) {
    $cargo = "cliente";
} elseif ($permissao == 2) {
    $cargo = "vendedor";
} elseif ($permissao == 3) {
    $cargo = "gerente";
} elseif ($permissao == 4) {
    $cargo = "administrador";
} else {
    $cargo = "desconhecido";
}

$sql = "INSERT INTO USUARIO VALUES (NULL, '{$usuario}', '{$nome}', '{$sobrenome}', '{$email}', '{$cpf}', '$telefone', '{$passwordConfirmado}', '{$cargo}', '{$permissao}')";


if($password == $passwordConfirm && mysqli_query($conect, $sql)) {
    header("Location: ../../pages/usuarios/usuarios.php");
} else {
    header("Location: ../../pages/usuarios/cadastrar_usuario.php");
};

mysqli_close($conect);

?>