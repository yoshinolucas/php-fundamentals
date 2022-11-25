<?php

// stdin evento do teclado
$linha = trim(fgets(STDIN));
file_put_contents('../doc/text4.txt', $linha, FILE_APPEND);

?>