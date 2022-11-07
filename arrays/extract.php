<?php

//extract transforma a key de um array associativo em variavel 

$dados = [
    'nome' => 'Lucas',
    'nota' => 10,
    'idade' => 22
];

extract($dados);
var_dump($nome, $nota, $idade);