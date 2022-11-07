<?php

$url = 'https://www.google.com.br';

var_dump(substr($url, 0, 8));
//verificar se começa com https
echo substr($url, 0, 8) == 'https://' ? 'É uma URL segura' : 'Não é uma URL segura';

echo PHP_EOL;

var_dump(substr($url, -3));
//verificar se termina com .br
echo substr($url, -3) == '.br' ? 'É de domínio brasileiro' : 'Não é de domínio brasileiro';

