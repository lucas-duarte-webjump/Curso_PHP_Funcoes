<?php 

namespace PHP\Banco\Interfaces;

interface Autenticavel {
    public function podeAutenticar(string $senha): bool; 
}