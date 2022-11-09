<?php
namespace DigitalBankAdm\models\Funcionario; 
use DigitalBankAdm\models\Endereco;
class Estagiario extends Funcionario 
{
    private $id_estagiario;
    public function __construct(int $id_estagiario,
    string $nome,
    string $cpf,
    Endereco $endereco)
    {
        parent::__construct($nome, $cpf, $endereco);
        $this->id_estagiario = $id_estagiario;
    }
}
?>