<?php

// imprime na tela igual ao echo e print
$tela = fopen('php:://stdout', 'w');
fwrite($tela, 'Hello World!');

?>