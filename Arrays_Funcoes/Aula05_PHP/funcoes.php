<?php

function exibirMessagem(string $mensagem)
{
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

function titularComLetrasMaiusculas(array &$conta): void {
   $conta['Titular'] = strtoupper($conta['Titular']);
}

# Passagem de variaveis por valor ou por referência
# O conceito de passagem por referência se aplica quando queremos alterar um valor de uma
# variavel que está alocada na memória

# Quando passamos um & antes da váriavel, mostra que queremos pegar a referência do valor
# e não um cópia
