<?php

namespace PHP\Banco\Modelo\Funcionario;

use PHP\Banco\Modelo\Cpf;
use PHP\Banco\Modelo\Pessoa;

abstract class Funcionario extends Pessoa 
{
    private float $salario;


    public function __construct(string $nome, Cpf $cpf, float $salario)
    {
        parent::__construct($nome, $cpf);
        $this->salario =  $salario;
    }

  


    public function recuperaSalario()
    {
        return $this->salario;
    }
    
    public function validaNomeTitular(string $nome): void
    {
        $this->validNomeTitular($nome);
        $this->nome = $nome;
    }

    public function recebeAumento(float $valorAumento): void
    {
        if($valorAumento < 0) {
            echo "O valor deve ser positivo";
            return;
        }

        $this->salario += $valorAumento;


    }

    abstract public function calcularBonificacao(): float;
}