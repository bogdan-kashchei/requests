<?php
require_once '../vendor/autoload.php';

use App\GuzzleRequest;
use App\SymfonyDocs;

$guzzleClient = new GuzzleRequest();
$symfonyClient = new SymfonyDocs();

$responseGuzzleGet = $guzzleClient->getRequest('https://www.google.com.ua/?hl=ru');
$responseSymfonyGet = $symfonyClient->getRequest('https://www.google.com.ua/?hl=ru');

echo $responseGuzzleGet->getStatusCode();
echo "<br>";
echo $responseSymfonyGet->getStatusCode();
