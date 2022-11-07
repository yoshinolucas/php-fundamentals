<?php

//replace, substitui char por outro parametro
$texto = "Texto com bla bla bla poxa e caramba bla bla";

$palavras_blacklist = ['poxa', 'caramba'];
echo str_replace($palavras_blacklist, '***', $texto) . PHP_EOL;

// essa função trabalha com char
echo strtr($texto, 'poxa', '***') . PHP_EOL;

//outro jeito
echo strtr($texto, ['poxa' => 'p', 'caramba' => 'c']);



