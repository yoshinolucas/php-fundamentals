<?php
require 'src/models/Conta.php';
require 'src/models/Titular.php';

$conta1 = new Conta(new Titular(1, 'Lucas Yudi Yoshino'));

//método void sem return
$conta1->saldo = 300;
var_dump($conta); // saldo == 300
$conta1->sacar(200);
var_dump($conta); // saldo == 100
$conta1->sacar(101); // saldo insuficiente
var_dump($conta); // saldo == 100


$conta2 = new Conta(new Titular(2, 'Alex'));
$conta1->transferir($conta2, 100);
var_dump($conta2); // saldo == 100
var_dump($conta1); // saldo == 0

?>