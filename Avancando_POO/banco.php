<?php


require_once 'autoload.php';

use PHP\Banco\Modelo\Conta\{Conta, Titular};
use PHP\Banco\Modelo\{Cpf, Endereco};

$endereco = new Endereco('São Paulo', 'Maria do Bairro', 'Mario da Rua', '484');

$primeiraConta = new Conta(new Titular(new Cpf('123.456.789-10'), 'Lucas', $endereco));
var_dump($primeiraConta);
$primeiraConta->deposita(500);
$primeiraConta->saca(300);

echo $primeiraConta->recuperaNomeTitular();