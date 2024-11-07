<?php

session_start();

include('../../scripts/sql/conect.php');

$tipo = mysqli_real_escape_string($conect, $_POST['tipo']);
$descricao = mysqli_real_escape_string($conect, $_POST['descricao']);
$nivel = mysqli_real_escape_string($conect, $_POST['nivel']);
$status = "em aberto";
$id_usuario = $_SESSION['SESSION_ID'];
$nome_usuario = mysqli_real_escape_string($conect, $_POST['nome']);

$criarChamado = $conect->prepare("INSERT INTO CHAMADO VALUES (NULL, '{$tipo}', '{$descricao}', '{$nivel}', '{$status}', '{$id_usuario}', '{$nome_usuario}', NULL, NULL )");

$criarChamado->execute();

header('Location: ../../pages/chamados/home_chamados.php');

?>