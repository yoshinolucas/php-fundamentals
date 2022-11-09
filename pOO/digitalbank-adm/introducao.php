<?php
namespace DigitalBankAdm;
use DigitalBankAdm\models\Funcionario\Funcionario;
use DigitalBankAdm\models\Endereco;

$endereco = new Endereco(
    'SP',
    'São Paulo',
    'Jardim Soraia',
    'Nicola Buzaid',
    '48');

$funcionario = new Funcionario(
    'Lucas',
    '442.605.038-39',
    $endereco);

echo $endereco->getRua();
echo $funcionario->getNome();
echo $funcionario->getEndereco();
?>