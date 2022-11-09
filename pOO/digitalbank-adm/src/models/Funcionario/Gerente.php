<?php
namespace DigitalBankAdm\models\Funcionario;
use DigitalBankAdm\models\Endereco;
class Gerente extends Funcionario 
{
    private $id_gerente;
    public function __construct(int $id_gerente, string $nome, string $cpf, Endereco $endereco)
    {
        parent::__construct($nome, $cpf, $endereco);
        echo 'chegou aqui';
        $this->id_gerente= $id_gerente;
    }

}
?>