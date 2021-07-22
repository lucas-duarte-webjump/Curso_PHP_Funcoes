<?php

namespace PHP\Banco\Modelo\Funcionario;

class Desenvolvedor extends Funcionario 
{
   public function sobeDeNivel(): void 
   {
    $this->recebeAumento($this->recuperaSalario() * 0.75);
   }
    

   public function calcularBonificacao(): float
   {
       return 500.0;
   }
}