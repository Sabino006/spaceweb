<?php

session_start();

include('../../scripts/sql/conect.php');

$id_usuario = $_SESSION['SESSION_ID'];

$pedidos_usuario = "SELECT * FROM PEDIDO WHERE ID_VENDEDOR = '{$id_usuario}'";
$pedidos = "SELECT * FROM PEDIDO";

$con = $conect->query($pedidos) or die ($conect->error);
$conUsers = $conect->query($pedidos_usuario) or die ($conect->error);

?>