<?php

require_once 'autoload.php';


use PHP\Banco\Modelo\Conta\{Conta, Titular};
use PHP\Banco\Modelo\{Cpf, Endereco};

$conta = new Conta(
    new Titular(
        new Cpf('123.564.789-10'), 'Lucas Duarte', 
        new Endereco('Cidade sei lá', 'Bairro sei lá', 'Rua sei lá', '4865')
    ) 
);


$conta->deposita(500);

$conta->saca(100);

echo $conta->recuperaSaldo() . PHP_EOL;