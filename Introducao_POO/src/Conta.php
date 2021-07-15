<?php

class Conta 
{
    public string $cpfTitular;
    public string $nomeTitular;
    public float $saldo = 0;

    public function sacar(float $valorASacar) 
    {
        if($valorASacar > $this->saldo) {
            echo "Saldo Indisponivel";
        } else {
            $this->saldo -= $valorASacar;
        }
    }

    public function depositar(float $valorADepositar): void 
    {
        if($valorADepositar < 0) {
            echo "Valor precisa ser positivo";
        } else {
            $this->saldo += $valorADepositar;
        }
    }
}