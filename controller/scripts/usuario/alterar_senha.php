<?php

session_start();

include('../sql/conect.php');

$id = $_SESSION['SESSION_ID'];
$password = mysqli_real_escape_string($conect, $_POST['new_password']);
$passwordConfirm = mysqli_real_escape_string($conect, $_POST['confirm_password']);
$new_password = md5(md5($_POST['new_password']));

$sql = "UPDATE USUARIO SET SENHA = '{$new_password}' WHERE ID = '{$id}'";

if($password == $passwordConfirm &&  mysqli_query($conect, $sql)) {
    header('Location: ../login/logout.php');
} else {
    header('Location: ../../pages/usuario/alterar_senha.php');
}

?>