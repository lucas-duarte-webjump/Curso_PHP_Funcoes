<?php

namespace PHP\Banco\Modelo;


trait AcessaPropriedade {
    public function __get(string $nomeAtributo)
    {
        $metodo = 'recupera' . ucfirst($nomeAtributo);
        return $this->$metodo();
    }
}

