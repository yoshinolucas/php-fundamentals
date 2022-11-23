<?php
namespace DigitalBankAdm\models;
class Endereco
{
    private $estado;
    private $cidade;
    private $bairro;
    private $rua;
    private $numero;

    public function __construct(string $estado, string $cidade, string $bairro, string $rua, string $numero)
    {
        $this->estado = $estado;
        $this->cidade = $cidade;
        $this->bairro = $bairro;
        $this->rua = $rua;
        $this->numero = $numero;
    }

//  Getters

    public function getEnderecoCompleto() : string
    {
        return 
        'Rua: '. $this->rua . PHP_EOL .
        'N: '. $this->numero . PHP_EOL .
        'Cidade: '. $this->cidade;
    }

    public function getEstado() : string
    {
        return $this->estado . PHP_EOL;
    }

    public function getCidade() : string
    {
        return $this->cidade . PHP_EOL;
    }

    public function getBairro() : string
    {
        return $this->bairro . PHP_EOL;
    }

    public function getRua() : string
    {
        return $this->rua . PHP_EOL;
    }

    public function getNumero() : string
    {
        return $this->numero . PHP_EOL;
    }

    public function __toString() : string
    {
        return "{$this->rua}";
    }

    public function __get($attr):string
    {
        $attrUp = ucfirst($attr);
        $metodo = "get".$attrUp;
        return $this->$metodo();
    }
}
?>