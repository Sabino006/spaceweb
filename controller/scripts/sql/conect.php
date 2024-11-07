<?php

define('HOST', '127.0.0.1');
define('USUARIO', 'root');
define('SENHA', 'password');
define('DB', 'spaceweb');

$conect = mysqli_connect(HOST, USUARIO, SENHA, DB) or die ('Não foi possivel estabelecer conexão com banco de dados');

?>