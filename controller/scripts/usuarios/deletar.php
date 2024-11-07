<?php 

session_start();
include('../sql/conect.php');

$id = $_GET['id'];

$deletaUsuario = $conect->prepare ("DELETE FROM USUARIO WHERE ID = '{$id}'");

$deletaUsuario->execute();
header("Location: ../../pages/usuarios/usuarios.php")

?>