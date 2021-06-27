<?php

function exibirMessagem(string $mensagem) {
  echo $mensagem . PHP_EOL;
};

function sacar(array $conta,float $valor): array
{
  if($valor > $conta['Saldo']) {
    exibirMessagem('Saldo insuficiente');
  } else {
    $conta['Saldo'] -= $valor;
  }

  return $conta;
}
function depositar(array $conta, float $valor): array
{
  if($valor > 0) {
    $conta['Saldo'] += $valor;
  } else {
    exibirMessagem('Deposito precisa ser positivo');
  }


  return $conta;
}

# Subrotina executa tudo que deve executar e não retorna valor nenhum
# Função executa tudo que deve executar e retorna valor

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
$contaCorrente['378.126.812.79'] = depositar($contaCorrente['378.126.812.79'], 3000);

foreach($contaCorrente as $index => $value ) {
  exibirMessagem("CPF: $index  Nome: {$value['Titular']} - R$ {$value['Saldo']}");
}
