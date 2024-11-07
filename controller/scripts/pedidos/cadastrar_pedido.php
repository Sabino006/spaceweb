<?php

session_start();

include('../../scripts/sql/conect.php');

$titulo = mysqli_real_escape_string($conect, $_POST['titulo']);
$descricao = mysqli_escape_string($conect, $_POST['descricao']);
$status = "em aberto";
$nome_cliente = mysqli_escape_string($conect, $_POST['nome_cliente']);
$email_cliente = mysqli_escape_string($conect, $_POST['email_cliente']);
$cpf_cliente = mysqli_escape_string($conect, $_POST['cpf_cliente']);

$id_vendedor = mysqli_escape_string($conect, $_POST['id_vendedor']);
$nome_vendedor = mysqli_escape_string($conect, $_POST['nome_vendedor']);
$cpf_vendedor = mysqli_escape_string($conect, $_POST['cpf_vendedor']);

$criarPedido = $conect->prepare("INSERT INTO PEDIDO VALUES (NULL,
 '{$titulo}',
 '{$descricao}',
 '{$status}',
 '{$nome_cliente}',
 '{$email_cliente}',
 '{$cpf_cliente}',
 '{$id_vendedor}',
 '{$nome_vendedor}',
 '{$cpf_vendedor}',
 NULL,
 NULL,
 NULL )");

$criarPedido->execute();

header('Location: ../../pages/pedidos/home_pedidos.php');

?>