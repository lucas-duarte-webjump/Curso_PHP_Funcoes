<?php

$array = [
  1 => 'a',
  '1' => 'b',
  1.5 => 'c',
  true => 'd'
];

# No final todos estes tipos de dados serão o valor 1, assim fazendo uma atribuição em cascata

foreach ($array as $item) {
  echo $item . PHP_EOL;
}
