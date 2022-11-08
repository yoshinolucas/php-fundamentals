<?php
class Conta 
{
    // Abstração: trazer para a classe apenas o necessário
    // Encapsulamento: expor para o usuário apenas o necessário

//  Atributos
    private $id;
    private $nomeTitular;
    private $saldo;
// Atributos estáticos (informação da classe)
    private static $numeroDeContas;
//  Construtor
    public function __construct(int $_id, string $_nomeTitular)
    {
        echo "Criando nova conta..." . PHP_EOL;
        $this->verificaNome($_nomeTitular);
        $this->id = $_id;       
        $this->saldo = 0;
        self::$numeroDeContas++;
    }
//  Destrutor (Garbage Collector)

    // o GC verifica se a memória está armazenando uma referência abandonada e a exclui do programa
    public function __destruct()
    {
        if ( self::$numeroDeContas > 2){
            echo 'Há mais de uma conta ativa';
        }
        self::$numeroDeContas--;
    }


//  Getters

    public static function getNumContas() : int
    {
        return self::$numeroDeContas;
    }

    public function getId() : int
    {
        return $this->id;
    }

    public function getNomeTitular() : string
    {
        return $this->nomeTitular;
    } 

    public function getSaldo() : float
    {
        return $this->saldo;
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

//  Métodos públicos
    public function sacar(float $valor) : void
    {
        // $this se refere ao objeto que chamou a função
        if($this->saldo < $valor){
            echo "Saldo insuficiente" . PHP_EOL;
            return;
        }
        $this->saldo -= $valor;
        echo "Valor sacado com sucesso" . PHP_EOL;
            
    }
    public function depositar(float $valor) : void
    {
        if($valor < 0){
            echo "Valor inválido" . PHP_EOL;
            return;
        }
        $this->saldo += $valor;
        echo "Valor depositado com sucesso" . PHP_EOL;
    }
    public function transferir(Conta $contaDestino, float $valor) : void
    {
        if($this->saldo < $valor){
            echo "Saldo insuficiente" . PHP_EOL;
            return;
        }
        $this->saldo -= $valor;
        $contaDestino->saldo += $valor;
        echo "Valor transferido com sucesso" . PHP_EOL;
    }
//  Métodos privados
    private function verificaNome(string $nome) : void
    {
        if(strlen($nome) < 5){
            echo 'Nome deve ter pelo menos 5 caracteres';
            exit();
        }
        $this->nomeTitular = $nome;
    }
}
?>