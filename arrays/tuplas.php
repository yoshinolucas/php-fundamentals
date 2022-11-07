<?php
//TUPLAS
//pequeno conjunto de elementos onde a sua posição representa uma ação

//Exemplo: primeira posição(0) representa um ok
// segunda posição(1) representa um erro

//dados vindo do banco
$dados = ['Vinicius', 10, 24];



//jeito nao usual
// $nome = $dados[0];
// $nota = $dados[1];
// $idade = $dados[2];


//jeito certo
list($nome, $nota, $idade) = $dados;

var_dump($nome, $nota, $idade);


?>