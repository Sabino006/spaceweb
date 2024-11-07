<?php

session_start();
include('../sql/conect.php');

if (!empty($_POST) AND (empty($_POST["usuario"]) OR empty($_POST["password"]))) {
    header("Location: ../../../index.php"); 
    exit();
}

$usuario = mysqli_real_escape_string($conect, $_POST["usuario"]);
$senha = mysqli_real_escape_string($conect, $_POST["password"]);

$sql = "SELECT ID, USUARIO, NOME, SOBRENOME, EMAIL, CPF, TELEFONE, NOME_CARGO, NIVEL_PERMISSAO, SENHA FROM USUARIO WHERE USUARIO = '{$usuario}' AND SENHA = md5(md5('{$senha}'))";
$query = mysqli_query($conect, $sql);
if (mysqli_num_rows($query) != 1) {
    header("Location: ../../../index.php");
    exit();
} else {
    $resultado = mysqli_fetch_assoc($query);

    if (!isset($_SESSION)) session_start();

    $_SESSION["SESSION_ID"] = $resultado["ID"];
    $_SESSION["SESSION_PASSWORD"] = $resultado["SENHA"];
    $_SESSION["SESSION_USUARIO"] = $resultado["USUARIO"];
    $_SESSION["SESSION_NOME"] = $resultado["NOME"];
    $_SESSION["SESSION_SOBRENOME"] = $resultado["SOBRENOME"];
    $_SESSION["SESSION_EMAIL"] = $resultado["EMAIL"];
    $_SESSION["SESSION_CPF"] = $resultado["CPF"];
    $_SESSION["SESSION_TELEFONE"] = $resultado["TELEFONE"];
    $_SESSION["SESSION_CARGO"] = $resultado["NOME_CARGO"];
    $_SESSION["SESSION_PERMISSAO"] = $resultado["NIVEL_PERMISSAO"];

    header("Location: ../../pages/home.php"); 
    exit();
}

?>