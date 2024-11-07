<?php

include('../../scripts/sql/conect.php');

$id = $_GET['id'];

$consulta = ("SELECT * FROM CHAMADO WHERE ID = '{$id}'");
$result = $conect->query($consulta);

while($chamado = mysqli_fetch_assoc($result)) {
    $codigo = $chamado['ID'];
    $tipo = $chamado['TIPO'];
    $descricao = $chamado['DESCRICAO'];
    $nivel = $chamado['NIVEL'];
    $status = $chamado['STATUS_CHAMADO'];
    $id_usuario = $chamado['ID_USUARIO'];
    $nome_usuario = $chamado['NOME_USUARIO'];
    $id_analista = $chamado['ID_ANALISTA'];
    $nome_analista = $chamado['NOME_ANALISTA'];
}

?>