<?php

require_once 'funcoes.php';

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

# Removendo variáveis da memoria


$contaCorrente['378.129.812-93'] = sacar($contaCorrente['378.129.812-93'], 3000);
$contaCorrente['378.126.812.79'] = depositar($contaCorrente['378.126.812.79'], 3000);

titularComLetrasMaiusculas($contaCorrente['378.129.812-93']);

unset($contaCorrente['378.126.812.79']);

foreach($contaCorrente as $index => $value ) {

  ['Titular' => $titular, 'Saldo' => $saldo] = $value;

  exibirMessagem("CPF: $index  Nome: {$titular} - R$ {$saldo}");
}
