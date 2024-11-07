<?php 

session_start();

include('../../scripts/sql/conect.php');

$nivel_cliente = 1;

$consulta = "SELECT * FROM USUARIO";
$consulta_cliente = "SELECT * FROM USUARIO WHERE NIVEL_PERMISSAO = '{$nivel_cliente}'";


$con = $conect->query($consulta) or die ($conect->error);
$conCliente = $conect->query($consulta_cliente) or die ($conect->error);


?>