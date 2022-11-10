<?php
namespace DigitalBankAdm\models\Conta;
use DigitalBankAdm\models\Endereco;
class Titular 
{
    private $id;
    private $nome;
    private $endereco;

    public function __construct(int $id,
     string $nome,
     Endereco $endereco) {
        $this->verificaNome($nome);
        $this->id = $id;
        $this->endereco = $endereco;
    }

    public function getId() : int
    {
        return $this->id;
    }

    public function getNome() : string
    {
        return $this->nome;
    }

    public function getEndereco() : string
    {
        return $this->endereco->getEnderecoCompleto();
    }

    //  Setters

    public function setId(int $id) : void
    {
        $this->id = $id;
    }

    public function setNomeTitular(string $nome) : void
    {
        $this->nomeTitular = $nome;
    }

    //  Métodos privados
    private function verificaNome(string $nome) : void
    {
        if(strlen($nome) < 5){
            echo 'Nome deve ter pelo menos 5 caracteres';
            exit();
        }
        $this->nome = $nome;
    }
}