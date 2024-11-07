<?php

include('../../scripts/sql/conect.php');

$codigo = mysqli_real_escape_string($conect, $_POST['id']);
$status = mysqli_real_escape_string($conect, $_POST['status']);
$id_analista = mysqli_escape_string($conect, $_POST['id_analista']);
$nome_analista = mysqli_escape_string($conect, $_POST['nome_analista']);


$consulta = $conect->prepare("UPDATE CHAMADO SET STATUS_CHAMADO = '{$status}', ID_ANALISTA = '{$id_analista}', NOME_ANALISTA = '{$nome_analista}' WHERE ID = '{$codigo}' ");
$consulta->execute();

header('Location: ../../pages/chamados/chamados.php');


?>