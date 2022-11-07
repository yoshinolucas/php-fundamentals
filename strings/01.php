<?php

$nome = 'Lucas Yudi Yoshino';

// primeira funcionalidade: verifica => contém 'Yoshino'

var_dump(strpos($nome,'Yoshino')); //retorna int de qtd de char

echo strpos($nome, 'Yoshino') ? 'true' : 'false';