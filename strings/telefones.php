<?php

//transforma um array em uma string única
$telefones = ['(24)9999-9999','(11)9999-9999','(56)98999-9999'];

$telefonesFormatado = implode($separator = ', ', $array =  $telefones);

echo $telefonesFormatado;