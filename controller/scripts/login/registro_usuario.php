<?php

include('../../scripts/sql/conect.php');

$usuario = mysqli_real_escape_string($conect, $_POST["usuario"]);
$nome = mysqli_real_escape_string($conect, $_POST['nome']);
$sobrenome = mysqli_real_escape_string($conect, $_POST['sobrenome']);
$cpf = mysqli_real_escape_string($conect, $_POST['cpf']);
$telefone = mysqli_real_escape_string($conect, $_POST['telefone']);
$email = mysqli_real_escape_string($conect, $_POST["email"]);
$password = mysqli_real_escape_string($conect, $_POST['password']);
$passwordConfirm = mysqli_real_escape_string($conect, $_POST['passwordConfirm']);
$passwordConfirmado = md5(md5($_POST['password']));
$cargo = "cliente";
$nivel = 1;

$sql = "INSERT INTO USUARIO VALUES (NULL, '{$usuario}', '{$nome}', '{$sobrenome}', '{$email}', '{$cpf}', '$telefone', '{$passwordConfirmado}', '{$cargo}', '{$nivel}')";


if($password == $passwordConfirm && mysqli_query($conect, $sql)) {
    header("Location: ../../../index.php");
} else {
    header("Location: ../../../registro.php");
};

mysqli_close($conect);

?>