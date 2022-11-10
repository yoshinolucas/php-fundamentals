<?php

namespace DigitalBankAdm\models\Conta;

class ContaCorrente extends Conta
{
    protected function percentual(): float
    {
        return 0.05;
    }

    public function transfere(Conta $contaDestino, float $valor) : void
    {
        if($this->saldo < $valor){
            echo "Saldo insuficiente" . PHP_EOL;
            return;
        }
        $this->saldo -= $valor;
        $contaDestino->saldo += $valor;
        echo "Valor transferido com sucesso" . PHP_EOL;
    }
}