<?php

/**
 * @throws Exception
 */
function funcao1() {
    echo "Entrando funcao 1" . PHP_EOL;

    try {
        
        funcao2();
    } catch (RuntimeException | DivisionByZeroError $err) {
        echo $err->getMessage()  . PHP_EOL;
        echo $err->getLine() . PHP_EOL;
   
    }

    echo "Sainda funcao 1" . PHP_EOL;
}

function funcao2() {
    echo "Entrando funcao 2" . PHP_EOL;

 
    
    throw new RuntimeException();

    echo "Sainda funcao 2" . PHP_EOL;
}


echo "Iniciando o programa principal" . PHP_EOL;

funcao1();

echo "Finalizando o programa principal" . PHP_EOL;

