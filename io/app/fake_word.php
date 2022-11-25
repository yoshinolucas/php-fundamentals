<?php
$arq = fopen('../doc/texto3.txt','a');

$linha = "\n" . readline();

fwrite($arq, $linha);

fclose($arq);

file_put_contents($arq,$linha,FILE_APPEND)
?>