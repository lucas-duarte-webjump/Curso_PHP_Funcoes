<?php

namespace PHP\Banco\Modelo\Funcionario;

use PHP\Banco\Interfaces\Autenticavel;

class Diretor extends Funcionario implements Autenticavel
{
    public function calcularBonificacao(): float
    {
        return $this->recuperaSalario() * 2;
    }

    public function podeAutenticar(string $senha): bool
    {
        return $senha === "1234";
    }
}