<?php
namespace DigitalBankAdm\models\Funcionario;
use DigitalBankAdm\models\Endereco;
class Gerente extends Funcionario 
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

}
?>