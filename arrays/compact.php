<?php

$dados = [
    'nome' => 'Lucas',
    'nota' => 12,
    'idade' => 22
];

extract($dados);

//inverso do extract, o compact ele cria um array
var_dump(compact('nome', 'nota', 'idade'));