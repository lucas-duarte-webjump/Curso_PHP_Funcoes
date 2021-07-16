<?php
require_once 'src/Conta.php';
require_once 'src/Titular.php';


$primeiraConta = new Conta(new Titular('123-456-789-10', 'Lucas'));
var_dump($primeiraConta);
$primeiraConta->deposita(500);
$primeiraConta->saca(300);

echo $primeiraConta->recuperaNomeTitular();