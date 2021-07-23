<?php


require_once 'autoload.php';

use PHP\Banco\Exceptions\SaldoInsuficienteException;
use PHP\Banco\Modelo\Conta\{ContaPoupanca, Titular};
use PHP\Banco\Modelo\{Cpf, Endereco};

$endereco = new Endereco('São Paulo', 'Maria do Bairro', 'Mario da Rua', '484');

$cpf = 

$primeiraConta = new ContaPoupanca(new Titular(new Cpf('111.111.111-11'), 'Lucas', $endereco));


try {
    $primeiraConta->deposita(500);
} catch (InvalidArgumentException $error) {
    echo $error->getMessage();
}


 try {
    $primeiraConta->saca(300);
} catch (SaldoInsuficienteException $error) {
    echo "Você não tem saldo para fazer esse saque" . PHP_EOL;
    echo $error->getMessage() . PHP_EOL;
}


echo $primeiraConta->recuperaSaldo() . PHP_EOL;