<?php
$telefones = [
'(24)9999-9999',
'(11)9999-9999',
'(56)98999-9999',
'(99)10000-3333',
'teste (11)9999-4444'
];

foreach($telefones as $telefone) {
    $telefoneValido = preg_match(
        '/^\([0-9]{2}\)9?[0-9]{4}-[0-9]{4}$/',
         $telefone
    );
    echo ($telefoneValido) 
    ?
    preg_replace(
    '/^\(([0-9]{2})\)(9?[0-9]{4}-[0-9]{4})$/',
    '(XX)\2',
    $telefone
    ) . PHP_EOL
    : 
    'Telefone inválido' . PHP_EOL;
}