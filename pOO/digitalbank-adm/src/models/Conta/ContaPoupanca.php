<?php

namespace DigitalBankAdm\models\Conta;

class ContaPoupanca extends Conta
{
    protected function percentual(): float
    {
        return 0.03;
    }
}