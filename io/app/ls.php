<?php

$dir = dir('.');

while($arq = $dir->read()){
    echo $arq . PHP_EOL;
}
?>