<?php
namespace DigitalBankAdm;
require_once 'src/includes/autoloader.php';

use DigitalBankAdm\models\Conta\Conta;
use DigitalBankAdm\models\Conta\ContaCorrente;
use DigitalBankAdm\models\Conta\ContaPoupanca;
use DigitalBankAdm\models\Endereco;
use DigitalBankAdm\models\Conta\Titular;

$conta = new ContaCorrente(
    new Titular(1, 'Lucas', 
    new Endereco('SP'
    , 'SP', 'Jardim Soraia',
     'Rua Nicola', '48')));

$conta2 = new ContaPoupanca(
new Titular(1, 'Lucas 2', 
new Endereco('SP', 'SP', 'Jardim Soraia',
    'Rua Nicola', '49')));

$conta->transfere($conta2, 400);


$conta->depositar(500);
$conta->sacar(100);
echo $conta->getSaldo();
?>