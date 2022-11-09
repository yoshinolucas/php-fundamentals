<?php
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
}
?>