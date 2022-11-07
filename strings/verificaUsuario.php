<?php

$nome = 'Lucas Yudi';
$email = 'lucasyudi7@gmail.com';
$senha = '1234';

//pega apenas o usuario antes do @
var_dump(substr($email, 0, 10));
//pega o dominio do email
var_dump(substr($email,-10));
//ou
var_dump(substr($email, 10));


//SOLUÇÃO PARA SE O EMAIL FOR OUTRO!
echo 'Solução certa!';
$posicaoDoArroba = strpos($email, '@');
var_dump(substr($email,0, $posicaoDoArroba));
var_dump(substr($email, $posicaoDoArroba));


//MANEIRA DE VER TAMANHO DA SENHA

//obs:. strlen retorna os bytes de cada char, então um á por exemplo retonaria 2 bytes
var_dump(strlen($senha));

echo (strlen($senha)) > 8 ? 'Senha segura' . PHP_EOL : 'Senha não segura' . PHP_EOL;


// TOUPPER E TOLOWER
//RETORNA OUTRA STRING, OU SEJA É UMA 
//FUNÇÃO QUE RETORNA UM VALOR E NAO REFERENCIA
//E TAMBÉM NÃO MUDA CHAR ESPECIAL
$texto = 'frase cOm acEnto especial Á';
echo strtolower($texto);
//JA ESSE CONSEGUE RETORNAR ACENTOS ESPECIAIS MAS PRECISA DO MODULO mbstring
//echo mb_strtolower($texto);

// pede uma string e um delimitador e devolve um array 
var_dump(explode(' ', $nome));
list($primeiroNome, $sobrenome) = explode(' ', $nome);
echo $primeiroNome . ' ' . $sobrenome;


