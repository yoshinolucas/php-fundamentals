<?php
namespace DigitalBankAdm\models\Funcionario; 
use DigitalBankAdm\models\Endereco;
class Estagiario extends Funcionario 
{
    private $id_estagiario;
    public function __construct(
    int $id_estagiario,
    string $nome,
    string $cpf,
    float $salario,
    Endereco $endereco)
    {
        parent::__construct($nome, $cpf, $salario, $endereco);
        $this->id_estagiario = $id_estagiario;
    }

    public function getId() {
        return $this->id_estagiario . PHP_EOL;
    }

    public function calculaBonificacao(): float
    {
        return $this->getSalario() * 0.1;
    }
}
?>