<?php
namespace DigitalBankAdm;
spl_autoload_register(function (string $nome) {
    $dir = str_replace('DigitalBankAdm','src', $nome);
    $dir = str_replace('\\', DIRECTORY_SEPARATOR, $dir);
    $dir .= '.php';
    if(file_exists($dir)) require_once $dir;});
use DigitalBankAdm\models\Funcionario\Gerente;
use DigitalBankAdm\models\Endereco;


$ger = new Gerente(1,'Lucas','42112314',
new Endereco('SP','SP','Jardim Soraia','rua nicola','3'));
var_dump($ger);
?>