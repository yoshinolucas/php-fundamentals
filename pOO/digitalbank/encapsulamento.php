<?php
require 'src/models/Conta.php';
require 'src/models/Titular.php';

$conta1 = new Conta(new Titular(1, 'Lucas Yudi Yoshino'));

$conta1->depositar(500);
echo 'Saldo da conta1: '. $conta1->getSaldo() . PHP_EOL; // 500
?>