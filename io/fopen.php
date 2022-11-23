<?php

$arq = fopen('texto.txt','r');

while(!feof($arq)){
    $linha = fgets($arq);

    echo $linha;
}