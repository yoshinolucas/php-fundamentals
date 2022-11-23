<?php
namespace DigitalBankAdm;
require 'src/includes/autoloader.php';

use DigitalBankAdm\models\Endereco;
use DigitalBankAdm\models\Funcionario\Gerente;
use DigitalBankAdm\models\Funcionario\Estagiario;


$umGerente = new Gerente(
    1, 
    'Lucas',
    '44260503839',
    3000,
    new Endereco(
        'SP',
        'SP',
        'Jardim Soraia',
        'Rua Nicola',
        '48'));

$umEstagiario = new Estagiario(
    2,
    'Ana Maria',
    '44260503840',
    1500,
    new Endereco(
        'RJ',
        'RJ',
        'Jardim Outro',
        'Rua Outro',
        '49'));

var_dump($umEstagiario);


