<?php 

require 'vendor/autoload.php';


use  Alura\BuscadorDeCursos;
use  GuzzleHttp\Client;
use Symfony\Component\DomCrawler\Crawler;
    


$client = new Client(['base_uri' => 'https://www.alura.com.br/']);
$crawler = new Crawler();

$buscador =  new Alura\BuscadorDeCursos\Buscador($client,$crawler);

$cursos = $buscador->buscar('cursos-online-front-end/html-css');


foreach($cursos as $curso){
    echo $curso . PHP_EOL ;
 
}

 