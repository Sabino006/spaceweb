<?php 

session_start();

include('../../scripts/sql/conect.php');

$id = $_GET['id'];

$consulta = "SELECT * FROM  USUARIO WHERE ID = '{$id}'";
$result = $conect->query($consulta);

while($user = mysqli_fetch_assoc($result)) {
    $nome = $user['NOME'];
    $sobrenome = $user['SOBRENOME'];
    $usuario = $user['USUARIO'];
    $email = $user['EMAIL'];
    $cpf = $user['CPF'];
    $telefone = $user['TELEFONE'];
    $cargo = $user['NOME_CARGO'];
}

?>