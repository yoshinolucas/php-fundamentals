<?php

$arq = new SplFileObject('../doc/teste.csv');

while(!$arq->eof()) {
    $row = $arq->fgetcsv(';');

    echo $row[1] . PHP_EOL;
}