<?php
namespace DigitalBankAdm\models\Services;

use DigitalBankAdm\models\Funcionario\Funcionario;

class calcula_bonus
{
    private $total = 0;

    public function addBonificacao(Funcionario $funcionario)
    {
        $this->total += $funcionario->calculaBonificacao();
    }

    public function getTotal() : float
    {
        return $this->total . PHP_EOL;
    }
}