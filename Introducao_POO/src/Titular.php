<?php

class Titular 
{
    private string $cpf;
    private string $nome;

    public function __construct(string $cpf, string $nome)
    {
        $this->cpf = $cpf;
        $this->validNomeTitular($nome);
        $this->nome= $nome;
    }

    public function recuperaCpf(): string
    {
        return $this->cpf;
    }

    public function recuperaNome(): string
    {
        return $this->nome;
    }

    private function validNomeTitular(string $nomeTitular) 
    {
        if (strlen($nomeTitular) < 5) {
            echo "Nome precisa ter pelo menos 5 catacteres";
            exit();
        }
    }
}