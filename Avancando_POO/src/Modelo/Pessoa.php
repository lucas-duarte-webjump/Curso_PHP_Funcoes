<?php


namespace PHP\Banco\Modelo;

abstract class Pessoa
{

    use AcessaPropriedade;

    protected string $nome;
    private Cpf $cpf;

    public function __construct(string $nome, Cpf $cpf)
    {
        $this->nome = $nome;
        $this->validNomeTitular($nome);
        $this->cpf = $cpf;
    }

    public function recuperaNome(): string
    {
        return $this->nome;
    }

    public function recuperaCpf(): string
    {
        return $this->cpf->recuperaCpf();
    }

    final protected function validNomeTitular(string $nomeTitular) 
    {
        if (strlen($nomeTitular) < 5) {
            echo "Nome precisa ter pelo menos 5 catacteres";
            exit();
        }
    }
}