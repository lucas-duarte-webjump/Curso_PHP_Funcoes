<?php

// Craindo um autoloader na mão
// Seguindo o padrão da PSR 4 (PHP Standards Recommendations) 

spl_autoload_register(function (string $className) 
{
    $pathClass = str_replace('PHP\\Banco', 'src', $className);
    $pathClass = str_replace('\\', DIRECTORY_SEPARATOR, $pathClass);
    $pathClass .= '.php';

    if (file_exists($pathClass)) {
        require_once $pathClass;
    }
});