<?php

namespace PHP\Banco\Modelo\Conta;

use InvalidArgumentException;
use PHP\Banco\Exceptions\SaldoInsuficienteException;

abstract class Conta
{
    private Titular $titular;
    protected float  $saldo;
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
          throw new SaldoInsuficienteException($valorSaque, $this->saldo);
        } 
        $this->saldo -= $valorSaque;
        
    }

    public function deposita(float $valorADepositar): void 
    {
        if($valorADepositar < 0) {
            throw new InvalidArgumentException();
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