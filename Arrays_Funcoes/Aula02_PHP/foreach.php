<?php


# Podemos acessar os valores do array associativo da forma abaixo


# $contaCorrente = [$conta1, $conta2, $conta3];


# foreach($contaCorrente as $conta) {
#   echo $conta['Titular'] . PHP_EOL;
# }

# Podemos atribuir indices especificios em um array associativo.
# onde a chava é indice o valor pode conter outro array associativo

$contaCorrente = [
  3781298129 => [
    'Titular' => 'Lucas',
    'Saldo' => 1000
  ],
  3782598129 => [
    'Titular' => 'Maroa',
    'Saldo' => 10000
  ],
  3781268129 => [
    'Titular' => 'Alberto',
    'Saldo' => 300
  ]
];

# O "as" funciona como o of no foreach do javascript

foreach($contaCorrente as $index => $value ) {
  echo $index . "-" . $value['Titular'] . PHP_EOL;
}
