<?php

namespace PHP\Banco\Service;

use PHP\Banco\Modelo\Funcionario\Funcionario as FuncionarioFuncionario;

class ControleDeBonificacoes {

    private $totalBonificacoes = 0;

    public function adicionaBonificacaoDe(FuncionarioFuncionario $funcionario)
    {
        $this->totalBonificacoes += $funcionario->calcularBonificacao();
    }

  
    public function recuperaTotalBonificacoes()
    {
        return $this->totalBonificacoes;
    }
}
