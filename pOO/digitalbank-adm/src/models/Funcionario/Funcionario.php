<?php
namespace DigitalBankAdm\models\Funcionario;
use DigitalBankAdm\models\Endereco;
class Funcionario
{
    private $nome;
    private $cpf;
    private $endereco;

    public function __construct(
        string $nome,
        string $cpf,
        Endereco $endereco)
    {
        $this->validaNome($nome);
        $this->nome = $nome;
        $this->cpf = $cpf;
        $this->endereco = $endereco;
    } 

    public function getNome() : string
    {
        return $this->nome . PHP_EOL;
    }

    public function getCpf() : string
    {
        return $this->cpf . PHP_EOL;
    }

    public function getEndereco() : string
    {
        return $this->endereco->getEnderecoCompleto() . PHP_EOL;
    }

    public function validaNome(string $nome)
    {
        if(strlen($nome) >= 5) {
            return $nome;
        } else {
            echo 'Nome inválido!';
            exit;
        };
    }
}
?>