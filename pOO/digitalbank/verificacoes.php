<?php
require 'src/models/Conta.php';
require 'src/models/Titular.php';

// método privado que verificou se o nome do titular consta mais de 5 caracteres
$conta = new Conta(new Titular(1, 'Lucas Yudi Yoshino'));
var_dump($conta);
?>