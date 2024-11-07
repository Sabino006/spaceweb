<?php 

include('../../scripts/sql/conect.php');

$id = $_GET['id'];

$deletaAtendimento = $conect->prepare("DELETE FROM ATENDIMENTO WHERE ID = '{$id}'");

$deletaAtendimento->execute();
header("Location: ../../pages/atendimento/atendimentos.php")

?>