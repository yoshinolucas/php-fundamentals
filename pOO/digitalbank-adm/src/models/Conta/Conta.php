<?php
namespace DigitalBankAdm\models\Conta;
abstract class Conta 
{
    // Abstração: trazer para a classe apenas o necessário
    // Encapsulamento: expor para o usuário apenas o necessário
    // Herança: Aproveitar de classes pais, atributos em comum com as classes filhas
    // Polimorfismo: Sobrescrita de métodos

    //  Atributos
    private $titular; // Composição de classes -> Conta recebe Titular
    protected $saldo;
    //  Atributos estáticos (informação da classe)
    private static $numeroDeContas;
    //  Construtor
    public function __construct(Titular $_titular)
    {
        echo "Criando nova conta..." . PHP_EOL;
        $this->titular = $_titular;      
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
        return $this->titular->getId();
    }

    public function getNomeTitular() : string
    {
        return $this->titular->getNome();
    } 

    public function getSaldo() : float
    {
        return $this->saldo;
    }

    //  Métodos públicos
    public function sacar(float $valor) : void
    {
        $tarifa = $valor * $this->percentual();
        $valorTarifado = $valor + $tarifa;
        // $this se refere ao objeto que chamou a função
        if($valorTarifado > $this->saldo){
            echo "Saldo insuficiente" . PHP_EOL;
            return;
        }
        $this->saldo -= $valorTarifado;
        echo "Valor sacado com sucesso" . PHP_EOL;
            
    }

    // Métodos Abstrato
    abstract protected function percentual() : float;
    
    public function depositar(float $valor) : void
    {
        if($valor < 0){
            echo "Valor inválido" . PHP_EOL;
            return;
        }
        $this->saldo += $valor;
        echo "Valor depositado com sucesso" . PHP_EOL;
    }
}