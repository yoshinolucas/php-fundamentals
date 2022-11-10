<?php
namespace DigitalBankAdm;
require_once 'src/includes/autoloader.php';
use DigitalBankAdm\models\Funcionario\Funcionario;
use DigitalBankAdm\models\Endereco;

$endereco = new Endereco(
    'SP',
    'São Paulo',
    'Jardim Soraia',
    'Nicola Buzaid',
    '48');


echo $endereco->getRua();
echo $funcionario->getNome();
echo $funcionario->getEndereco();
?>