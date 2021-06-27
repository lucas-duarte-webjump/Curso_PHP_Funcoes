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



# O PHP trabalha com níveis de erro, sendo dividido em
# E_WARNING: Uma aviso quando não conseguiu executar o que foi pedido
# E_NOTICE: Normalmente aparece quando o valor é undefined
# E_ERROR: Deu problema e não da continuidade a partir do erro
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <h1>Contas correntes</h1>

  <dl>
  <?php foreach($contaCorrente as $cpf => $conta ) { ?>
    <dt><h3><?= $conta['Titular']; ?> - <?= $cpf ?></h3></dt>
    <dd>Saldo: <?= $conta['Saldo']; ?></dd>
    <?php } ?>
  </dl>

</body>
</html>
