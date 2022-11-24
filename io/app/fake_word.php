<?php
$arq = fopen('../doc/texto3.txt','a');

$linha = "\n" . readline();

fwrite($arq, $linha);

fclose($arq);
?>