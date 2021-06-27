<?php

function exibirMessagem($mensagem) {
  echo $mensagem . PHP_EOL;
};

function sacar( $conta ,$valor) {
  if($valor > $conta['Saldo']) {
    exibirMessagem('Saldo insuficiente');
  } else {
    $conta['Saldo'] -= $valor;
  }


  return $conta;
}


$contaCorrente = [
  '378.129.812-93' => [
    'Titular' => 'Lucas',
    'Saldo' => 10000
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

# O "as" funciona como o of no foreach do javascript

$contaCorrente['378.129.812-93'] = sacar($contaCorrente['378.129.812-93'], 3000);
$contaCorrente['378.126.812.79'] = sacar($contaCorrente['378.126.812.79'], 3000);

foreach($contaCorrente as $index => $value ) {
  exibirMessagem("CPF: $index  Nome: {$value['Titular']} - R$ {$value['Saldo']}");
}
