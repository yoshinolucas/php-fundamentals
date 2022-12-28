<?php
require_once './vendor/autoload.php';
use GuzzleHttp\Client;

$client = new Client();
$res = $client->request('GET', 'https://www.alura.com.br/cursos/php');
