<?php

session_start();

include('../../scripts/sql/conect.php');

$id_usuario = $_SESSION['SESSION_ID'];
$status = 'em andamento';

$atendimento_cliente = "SELECT * FROM ATENDIMENTO WHERE ID_CLIENTE = '{$id_usuario}'";
$atendimento_vendedor = "SELECT * FROM ATENDIMENTO WHERE ID_VENDEDOR = '{$id_usuario}'";
$atendimento_andamento = "SELECT * FROM ATENDIMENTO WHERE STATUS_ATENDIMENTO = '{$status}' AND ID_VENDEDOR = '{$id_usuario}'";
$atendimentos = "SELECT * FROM ATENDIMENTO";

$con = $conect->query($atendimentos) or die ($conect->error);
$conCliente = $conect->query($atendimento_cliente) or die ($conect->error);
$conVendedor = $conect->query($atendimento_vendedor) or die ($conect->error);
$conAndamento = $conect->query($atendimento_andamento) or die ($conect->error);

?>