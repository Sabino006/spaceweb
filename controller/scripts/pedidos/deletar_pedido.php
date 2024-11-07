<?php 

include('../../scripts/sql/conect.php');

$id = $_GET['id'];

$deletaPedido = $conect->prepare("DELETE FROM PEDIDO WHERE ID = '{$id}'");

$deletaPedido->execute();
header("Location: ../../pages/pedidos/pedidos.php")

?>