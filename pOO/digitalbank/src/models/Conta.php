<?php
class Conta 
{
//  Atributos
    public $id;
    public $nomeTitular;
    public $saldo;

//  Métodos
    public function sacar(float $valor) : void
    {
        // $this se refere ao objeto que chamou a função
        if($this->saldo > $valor){
            $this->saldo -= $valor;
        } else {
            echo 'Saldo insuficiente' . PHP_EOL;
        }
    }

    
}
?>