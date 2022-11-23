<?php

namespace DigitalBankAdm\models\Funcionario;

use DigitalBankAdm\models\Autenticavel;
use DigitalBankAdm\models\Endereco;

class Diretor extends Funcionario implements Autenticavel
{
    private $id_diretor;

    public function __construct(int $id_diretor,string $nome, string $cpf, float $salario,Endereco $endereco)
    {
        parent::__construct($nome, $cpf,$salario,$endereco);
        $this->id_diretor = $id_diretor;
    }

    public function calculaBonificacao(): float
    {
        return $this->getSalario() * 2;
    }

    public function autentica(string $senha) : bool
    {
        if($senha == '12345'){
            return true;
        } else {
            return false;
        }
        
    }
}