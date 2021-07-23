<?php

namespace PHP\Banco\Exceptions;

use DomainException;

class SaldoInsuficienteException extends DomainException 
{

    public function __construct(float $valorSaque, float $saldo ) {
        $message =  "Você tentou sacar R$ {$valorSaque}, mas tem R${$saldo} na conta.";
        parent::__construct($message);
    }
}