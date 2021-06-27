<?php

# Podemos importar arquivos tanto com o include quando com o require

# include 'funcoes.php';

#require 'funcoes.php';

# Use sempre o require_once, ele irá importar apenas uma vez, mesmo que já tenha importações iguais

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

# O "as" funciona como o of no foreach do javascript

$contaCorrente['378.129.812-93'] = sacar($contaCorrente['378.129.812-93'], 3000);
$contaCorrente['378.126.812.79'] = depositar($contaCorrente['378.126.812.79'], 3000);

titularComLetrasMaiusculas($contaCorrente['378.129.812-93']);

foreach($contaCorrente as $index => $value ) {
  # Desestruturação no PHP
  # Primeiro modo
  # list('Titular' => $titular, 'Saldo' => $saldo) = $value
  # 2 Segundo modo
  ['Titular' => $titular, 'Saldo' => $saldo] = $value;

  exibirMessagem("CPF: $index  Nome: {$titular} - R$ {$saldo}");
}


# O PHP trabalha com níveis de erro, sendo dividido em
# E_WARNING: Uma aviso quando não conseguiu executar o que foi pedido
# E_NOTICE: Normalmente aparece quando o valor é undefined
# E_ERROR: Deu problema e não da continuidade a partir do erro
