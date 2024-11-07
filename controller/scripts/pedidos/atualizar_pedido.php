<?php

include('../../scripts/sql/conect.php');


$id_pedido = mysqli_real_escape_string($conect, $_POST['id_pedido']);
$titulo = mysqli_real_escape_string($conect, $_POST['titulo']);
$descricao = mysqli_escape_string($conect, $_POST['descricao']);
$status = mysqli_escape_string($conect, $_POST['status']);
$nome_cliente = mysqli_escape_string($conect, $_POST['nome_cliente']);
$email_cliente = mysqli_escape_string($conect, $_POST['email_cliente']);
$cpf_cliente = mysqli_escape_string($conect, $_POST['cpf_cliente']);
$id_vendedor = mysqli_escape_string($conect, $_POST['id_vendedor']);
$nome_vendedor = mysqli_escape_string($conect, $_POST['nome_vendedor']);
$cpf_vendedor = mysqli_escape_string($conect, $_POST['cpf_vendedor']);
$id_gerente = mysqli_escape_string($conect, $_POST['id_gerente']);
$nome_gerente = mysqli_escape_string($conect, $_POST['nome_gerente']);
$cpf_gerente = mysqli_escape_string($conect, $_POST['cpf_gerente']);

$consulta = $conect->prepare("UPDATE PEDIDO SET
 TITULO = '{$titulo}',
 DESCRICAO = '{$descricao}',
 STATUS_PEDIDO = '{$status}',
 NOME_CLIENTE = '{$nome_cliente}',
 EMAIL_CLIENTE = '{$email_cliente}',
 CPF_CLIENTE = '{$cpf_cliente}',
 ID_VENDEDOR = '{$id_vendedor}',
 NOME_VENDEDOR = '{$nome_vendedor}',
 CPF_VENDEDOR = '{$cpf_vendedor}',
 ID_GERENTE = '{$id_gerente}',
 NOME_GERENTE = '{$nome_gerente}',
 CPF_GERENTE = '{$cpf_gerente}' WHERE ID = '{$id_pedido}'");
$consulta->execute();

header('Location: ../../pages/pedidos/pedidos.php');


?>