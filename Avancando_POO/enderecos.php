<?php

use PHP\Banco\Modelo\Endereco;

require_once 'autoload.php';


$umEndereco = new Endereco('São Paulo', 'Centro', 'Rua Covas', '300');

echo $umEndereco->rua;

// echo $umEndereco . PHP_EOL;