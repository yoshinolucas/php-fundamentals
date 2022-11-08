<?php
require 'src/models/Conta.php';
$conta = new Conta();

//método void sem return
$conta->saldo = 300;
var_dump($conta); // saldo = 300
$conta->sacar(200);
var_dump($conta); // saldo = 100
$conta->sacar(101); // saldo insuficiente
var_dump($conta); // saldo = 100
?>