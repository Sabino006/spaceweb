<?php

include('../../scripts/sql/conect.php');

$id_atendimento = mysqli_real_escape_string($conect, $_POST['id_atendimento']);
$status = mysqli_real_escape_string($conect, $_POST['status_atendimento']);
$id_vendedor = mysqli_escape_string($conect, $_POST['id_vendedor']);
$nome_vendedor = mysqli_escape_string($conect, $_POST['nome_vendedor']);


$consulta = $conect->prepare("UPDATE ATENDIMENTO SET STATUS_ATENDIMENTO = '{$status}', ID_VENDEDOR = '{$id_vendedor}', NOME_VENDEDOR = '{$nome_vendedor}' WHERE ID = '{$id_atendimento}' ");
$consulta->execute();

header('Location: ../../pages/atendimento/atendimentos.php');


?>