<?php 

include('../../scripts/sql/conect.php');

$id = $_GET['id'];

$deletaChamado = $conect->prepare("DELETE FROM CHAMADO WHERE ID = '{$id}'");

$deletaChamado->execute();
header("Location: ../../pages/chamados/chamados.php")

?>