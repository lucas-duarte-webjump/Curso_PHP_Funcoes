<?php

namespace PHP\Banco\Modelo\Conta;


abstract class Conta
{
    private $titular;
    protected float $saldo;
    private static $numeroDeContas = 0;


    public function __construct(Titular $titular) 
    {
        $this->titular = $titular;
        $this->saldo = 0;
        self::$numeroDeContas++;
    }

    public function __destruct() 
    {
        self::$numeroDeContas--;
    }



    public function recuperaSaldo(): string
    {
        return $this->saldo;
    }

    public function saca(float $valorASacar) 
    { 
        $tarifaDeSaque = $valorASacar * $this->percentualTarifa();
        $valorSaque = $valorASacar + $tarifaDeSaque;

        if($valorSaque > $this->saldo) {
            echo "Saldo Indisponivel";
            return;
        } 
        $this->saldo -= $valorSaque;
        
    }

    public function deposita(float $valorADepositar): void 
    {
        if($valorADepositar < 0) {
            echo "Valor precisa ser positivo";
            return;
        } 
        $this->saldo += $valorADepositar;
        
    }

   
    public function recuperaNomeTitular(): string
    {
        return $this->titular->recuperaNome();
    }

    public function recuperaCpfTitular(): string
    {
        return $this->titular->recuperaCpf();
    }

    abstract protected function percentualTarifa(): float;

    public static function recuperaNumeroDeConta(): int
    {
        return self::$numeroDeContas;
    }
}