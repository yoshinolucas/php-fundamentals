<?php
namespace DigitalBankAdm;
require_once 'src/includes/autoloader.php';
use DigitalBankAdm\models\Funcionario\Gerente;
use DigitalBankAdm\models\Endereco;

$ger = new Gerente(1,'Lucas','42112314',
new Endereco('SP','SP','Jardim Soraia','rua nicola','3'));
var_dump($ger);
?>