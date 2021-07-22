<?php

namespace PHP\Banco\Service;

use PHP\Banco\Interfaces\Autenticavel;

class Autenticador  {
    public function tentaLogin(Autenticavel $autenticavel, string $senha) {
        if($autenticavel->podeAutenticar($senha)) {
            echo 'Ok, usuário logado com sucesso';
            return;
        }

        echo "Senha incorreta";
    }
}