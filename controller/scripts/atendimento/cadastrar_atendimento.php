<?php

session_start();

include('../../scripts/sql/conect.php');

$id_cliente = mysqli_real_escape_string($conect, $_POST['id_cliente']);
$nome_cliente = mysqli_real_escape_string($conect, $_POST['nome_cliente']);
$cpf_cliente = mysqli_real_escape_string($conect, $_POST['cpf_cliente']);
$email_cliente = mysqli_real_escape_string($conect, $_POST['email_cliente']);
$telefone_cliente = mysqli_real_escape_string($conect, $_POST['telefone_cliente']);
$servico = mysqli_real_escape_string($conect, $_POST['servico']);
$status = "aguardando";

$criarChamado = $conect->prepare("INSERT INTO ATENDIMENTO VALUES (NULL, '{$id_cliente}', '{$servico}', '{$nome_cliente}', '{$cpf_cliente}', '{$email_cliente}', '{$telefone_cliente}', '{$status}', NULL, NULL )");

$criarChamado->execute();

header('Location: ../../pages/atendimento/meus_atendimentos.php');

?>