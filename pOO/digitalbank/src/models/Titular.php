<?php

class Titular 
{
    private $id;
    private $nome;

    public function __construct(int $id, string $nome) {
        $this->id = $id;
        $this->verificaNome($nome);
    }

    public function getId() : int
    {
        return $this->id;
    }

    public function getNome() : string
    {
        return $this->nome;
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