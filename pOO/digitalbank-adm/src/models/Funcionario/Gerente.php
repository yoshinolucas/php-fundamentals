<?php
namespace DigitalBankAdm\models\Funcionario;

use DigitalBankAdm\models\Autenticavel;
use DigitalBankAdm\models\Endereco;
class Gerente extends Funcionario implements Autenticavel
{
    private $id_gerente;
    public function __construct(
    int $id_gerente,
    string $nome,
    string $cpf,
    float $salario,
    Endereco $endereco)
    {
        parent::__construct($nome, $cpf, $salario, $endereco);
        $this->id_gerente= $id_gerente;
    }
    public function getId()
    {
        return $this->id_gerente;
    }

    public function calculaBonificacao(): float
    {
        return $this->getSalario();
    }

    public function autentica(string $senha): bool
    {
        return $senha == 'gerente123' ? true : false;
    }
}
?>