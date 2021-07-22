<?php

require_once "autoload.php";

use PHP\Banco\Modelo\Cpf;
use PHP\Banco\Modelo\Funcionario\Diretor;
use PHP\Banco\Service\Autenticador;


$autenticador = new Autenticador();

$diretor = new Diretor('Lucas', new Cpf('123.456.789-10'), 5000);

echo $autenticador->tentaLogin($diretor, '1234') . PHP_EOL;

