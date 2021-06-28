<?php

require 'vendor/autoload.php';

use GuzzleHttp\Client;
use LucasDuarteWebjump\BuscadorCursos\Buscador;
use Symfony\Component\DomCrawler\Crawler;

$client = new Client(['base_uri' => 'https://cursos.alura.com.br/']);
#echo $html;
$crawler = new Crawler();

$buscador = new Buscador($client, $crawler);
# O simbolo -> serve para chamar funções internas de uma classe
$cursos = $buscador->buscar('/category/programacao/php');

foreach($cursos as $curso) {

    exibirMensagem($curso);
}
