<?php
spl_autoload_register(function (string $nome) {
    $dir = str_replace('DigitalBankAdm','src', $nome);
    $dir = str_replace('\\', DIRECTORY_SEPARATOR, $dir);
    $dir .= '.php';
    if(file_exists($dir)) require_once $dir;});
?>