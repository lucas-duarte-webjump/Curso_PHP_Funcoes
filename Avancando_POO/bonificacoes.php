<?php
require_once 'autoload.php';

use PHP\Banco\Modelo\Cpf;
use PHP\Banco\Modelo\Funcionario\Desenvolvedor;
use PHP\Banco\Modelo\Funcionario\Diretor;
use PHP\Banco\Service\ControleDeBonificacoes;

$diretor = new Diretor('Lucas', new Cpf('123.456.789-10'),  5000);
$desenvolvedor = new Desenvolvedor('Lucasss', new Cpf('123.456.789-10'),  3000);

$desenvolvedor->sobeDeNivel();

$controlador = new ControleDeBonificacoes();

$controlador->adicionaBonificacaoDe($diretor);
$controlador->adicionaBonificacaoDe($desenvolvedor);

echo $controlador->recuperaTotalBonificacoes() . PHP_EOL;
