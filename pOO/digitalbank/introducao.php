<?php
require 'src/models/Conta.php';
require 'src/models/Titular.php';
//instância de uma classe = objeto
//classe é o tipo do objeto

//o valor do $primeirConta é o endereço na memória
$primeiraConta = new Conta(new Titular(1, 'Lucas Yudi Yoshino'));
$primeiraConta->id = 1;
$primeiraConta->nomeTitular = 'Lucas Yudi Yoshino';
$primeiraConta->saldo = 30;
var_dump($primeiraConta);

//Valor vs Referência

//Valor
$a = 4;
$b = $a;
var_dump($b); // 4
$b++;
var_dump($b); // 5
var_dump($a); // 4

//Referência
$conta1 = new Conta(new Titular(2, 'Kátia'));
$conta1->saldo = 300;
$conta2 = $conta1;
var_dump($conta2); // saldo == 300
$conta2->saldo += 100;
var_dump($conta2); // saldo == 400
var_dump($conta1); // saldo == 400


?>