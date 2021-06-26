<?php

# Array associativo
# Esse Array tem o mesmo princípio de um objeto, contento chave e valor

$conta1 = [
    'Titular' => 'Lucas', 
    'Saldo' => 1000
];

$conta2 = [
    'Titular' => 'Maroa', 
    'Saldo' => 10000
];
$conta3 = [
    'Titular' => 'Alberto', 
    'Saldo' => 300
];
# Podemos acessar os valores do array associativo da forma abaixo

$conta1['Titular'] . PHP_EOL;


$contaCorrente = [$conta1, $conta2, $conta3];

for($i = 0; $i < count($contaCorrente); $i++) {
    echo $contaCorrente[$i]['Titular'] . PHP_EOL;
}