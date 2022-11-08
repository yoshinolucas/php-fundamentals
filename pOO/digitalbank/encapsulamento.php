<?php
require 'src/models/Conta.php';

$conta1 = new Conta(1, 'Lucas Yudi Yoshino');

$conta1->depositar(500);
echo 'Saldo da conta1: '. $conta1->getSaldo() . PHP_EOL; // 500

$conta1->setId(4);
echo 'Id da conta1: '. $conta1->getId();
?>