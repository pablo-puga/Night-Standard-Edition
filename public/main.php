<?php

require_once __DIR__ . '/../vendor/autoload.php';

use Night\Component\Bootstrap\Bootstrap;

$generalConfigurations = [
    'environment' => Bootstrap::NIGHT_DEVELOPMENT_ENVIRONMENT,
    'configurationsDirectory' => __DIR__ . '/../app',
    'configurationsFileExtension' => \Night\Component\FileParser\JSONParser::FILE_EXTENSION
];

$bootstrap = new Bootstrap($generalConfigurations);

$uri        = $_SERVER['REQUEST_URI'];
$start      = strpos('/MyApp/main.php', $uri) + strlen('/MyApp/main.php');
$length     = strlen($uri) - $start;
$requestURI = substr($uri, $start, $length);

$bootstrap($requestURI);