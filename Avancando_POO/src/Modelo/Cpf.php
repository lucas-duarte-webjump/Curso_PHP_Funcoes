<?php

namespace PHP\Banco\Modelo;

use InvalidArgumentException;

final class Cpf {
    private string $cpf;

    public function __construct(string $cpf)
    {
        {
            $cpf = filter_var($cpf, FILTER_VALIDATE_REGEXP, [
                'options' => [
                    'regexp' => '/^[0-9]{3}\.[0-9]{3}\.[0-9]{3}\-[0-9]{2}$/'
                ]
            ]);
            
            if ($cpf === false) {
                throw new InvalidArgumentException();
            }
            $this->cpf = $cpf;
        } 
    }

    public function recuperaCpf(): string
    {
        return $this->cpf;
    }
   
}