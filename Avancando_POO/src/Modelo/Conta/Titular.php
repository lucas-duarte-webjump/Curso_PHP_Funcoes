<?php

namespace PHP\Banco\Modelo\Conta;

use PHP\Banco\Interfaces\Autenticavel;
use PHP\Banco\Modelo\Cpf;
use PHP\Banco\Modelo\Endereco;
use PHP\Banco\Modelo\Pessoa;

class Titular extends Pessoa implements Autenticavel
{

    private Endereco $endereco;


    public function __construct(Cpf $cpf, string $nome, Endereco $endereco)
    {
        parent::__construct($nome, $cpf);
        $this->endereco = $endereco;
    }

    

    public function recuperaEndereco(): Endereco
    {
        return $this->endereco;
    }

    public function podeAutenticar(string $senha): bool 
    {
        return $senha === 'abcd';
    }

}