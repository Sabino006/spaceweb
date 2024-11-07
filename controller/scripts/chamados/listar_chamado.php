<?php

session_start();

include('../../scripts/sql/conect.php');

$id_usuario = $_SESSION['SESSION_ID'];

$chamdos_usuario = "SELECT * FROM CHAMADO WHERE ID_USUARIO = '{$id_usuario}'";
$chamdos = "SELECT * FROM CHAMADO";

$con = $conect->query($chamdos) or die ($conect->error);
$conUsers = $conect->query($chamdos_usuario) or die ($conect->error);

?>