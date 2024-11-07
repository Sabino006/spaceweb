<?php 
session_start();

include('../sql/conect.php');

$id = mysqli_real_escape_string($conect, $_POST['id']);
$nome = mysqli_real_escape_string($conect, $_POST['nome']);
$sobrenome = mysqli_real_escape_string($conect, $_POST['sobrenome']);
$email = mysqli_real_escape_string($conect, $_POST['email']);
$cpf = mysqli_real_escape_string($conect, $_POST['cpf']);
$telefone = mysqli_real_escape_string($conect, $_POST['telefone']);

$consultaUsuario = $conect->prepare ("UPDATE USUARIO SET NOME = '{$nome}', SOBRENOME = '{$sobrenome}', EMAIL = '{$email}', CPF = '{$cpf}', TELEFONE = '{$telefone}' WHERE ID = '{$id}'");

$consultaUsuario->execute();

header('Location: ../../pages/usuarios/usuarios.php');

?>