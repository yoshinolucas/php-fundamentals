<?php
require 'vendor/autoload.php';

use GuzzleHttp\Client;
use GuzzleHttp\Psr7;
use GuzzleHttp\Exception\ClientException;
use Symfony\Component\DomCrawler\Crawler;


$client = new Client(['base_uri'=> 'https://www.alura.com.br/']);
try {
    $response = $client->request('GET',
                        'cursos-online-programacao/php');
} catch(ClientException $e){
    echo Psr7\Message::toString($e->getRequest());
    echo Psr7\Message::toString($e->getResponse());
}

$html = $response->getBody();

$crawler = new Crawler();
$crawler->addHtmlContent($html);

$el = $crawler->filter('span.card-curso__nome');

foreach($el as $v){
    echo $v->textContent . PHP_EOL;
}

?>