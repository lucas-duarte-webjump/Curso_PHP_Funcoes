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
};

function exibeConta(array $conta): void
{

  ['Titular' => $titular, 'Saldo' => $saldo] = $conta;
  echo "<li>Titular: $titular. Saldo: $saldo</li>";
}
