<?php

$arq = new SplFileObject('../doc/teste.csv');

while(!$arq->eof()) {
    $row = $arq->fgetcsv(';');

    echo utf8_encode($row[1]) . PHP_EOL;
}

$date = new DateTime();
$date->setTimestamp($arq->getCTime());
echo $date->format('d/m/Y');