<?php

include('../../scripts/sql/conect.php');

$id = $_GET['id'];

$consulta = ("SELECT * FROM PEDIDO WHERE ID = '{$id}'");
$result = $conect->query($consulta);

while($chamado = mysqli_fetch_assoc($result)) {
    $id_pedido = $chamado['ID'];
    $titulo = $chamado['TITULO'];
    $descricao = $chamado['DESCRICAO'];
    $status = $chamado['STATUS_PEDIDO'];
    $nome_cliente = $chamado['NOME_CLIENTE'];
    $email_cliente = $chamado['EMAIL_CLIENTE'];
    $cpf_cliente = $chamado['CPF_CLIENTE'];
    $id_vendedor = $chamado['ID_VENDEDOR'];
    $nome_vendedor = $chamado['NOME_VENDEDOR'];
    $cpf_vendedor = $chamado['CPF_VENDEDOR'];
    $id_gerente = $chamado['ID_GERENTE'];
    $nome_gerente = $chamado['NOME_GERENTE'];
    $cpf_gerente = $chamado['CPF_GERENTE'];
}

?>