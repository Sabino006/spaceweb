<?php

include('../../scripts/sql/conect.php');

$id = $_GET['id'];

$consulta = ("SELECT * FROM ATENDIMENTO WHERE ID = '{$id}'");
$result = $conect->query($consulta);

while($atendimento = mysqli_fetch_assoc($result)) {
    $id_atendimento = $atendimento['ID'];
    $id_cliente = $atendimento['ID_CLIENTE'];
    $nome_cliente = $atendimento['NOME_CLIENTE'];
    $cpf_cliente = $atendimento['CPF_CLIENTE'];
    $email_cliente = $atendimento['EMAIL_CLIENTE'];
    $telefone_cliente = $atendimento['TELEFONE_CLIENTE'];
    $id_vendedor = $atendimento['ID_VENDEDOR'];
    $nome_vendedor = $atendimento['NOME_VENDEDOR'];
    $servico = $atendimento['SERVICO'];
    $status = $atendimento['STATUS_ATENDIMENTO'];
}

?>