<?php

namespace PHP\Banco\Modelo\Funcionario;

use PHP\Banco\Interfaces\Autenticavel;

class Gerente extends Funcionario implements Autenticavel
{
    public function calcularBonificacao(): float
    {
        return $this->recuperaSalario();
    }
    
    public function podeAutenticar(string $senha): bool {
        return $senha === '4321';
    } 
    
}