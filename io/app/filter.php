<?php
$arq = fopen('../doc/texto.txt', 'r');

stream_filter_append($arq, 'string.toupper');

echo fread($arq, filesize('../doc/texto.txt'));