<?php


$contaCorrente = [
  '378.129.812-93' => [
    'Titular' => 'Lucas',
    'Saldo' => 1000
  ],
  '378.259.812.49' => [
    'Titular' => 'Maroa',
    'Saldo' => 10000
  ],
  '378.126.812.79' => [
    'Titular' => 'Alberto',
    'Saldo' => 300
  ]
];

# Quando o indice é do tipo string, o PHP atribui um numero no indice quando tentamos
# atribuir um valor no array
# Para não haver este erro, devemos passar o valor do incie que queremos no formato string
# Como no exemplo:

$contaCorrente['378.106.812.79'] = [
  'Titular' => 'João',
  'Saldo' => 32000
];

# Quando não informamos valores em uma atribuição de array,
# O dado será alocado no final da lista, incrementando 1 no indice



foreach($contaCorrente as $index => $value ) {
  echo $index . "-" . $value['Titular'] . PHP_EOL;
}


# No PHP quando tentamos atribuir um valor em um lista, temos dois caminhos a seguir
# Quando temos um array numérico, podemos passar o array em um indice vazio, e atribuir um valor
# o mesmo irá para o final da fila, apenas incrementando o valor
# EXP: temos uma lista com os valores: $contaCorrente = [0 => ['Titular' => 'Lucas']]
#  $contaCorrente[] = [
#   'Titular' => 'João',
# ]
# Teremos no final o valor: [0 => ['Titular' => 'Lucas'], 1 => ['Titular' => 'João']]
