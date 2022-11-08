<?php
require 'src/models/Conta.php';

// método privado que verificou se o nome do titular consta mais de 5 caracteres
$conta = new Conta(1, 'Lucas');
var_dump($conta);
?>