<?php

require_once __DIR__ . '/../vendor/autoload.php';

use Night\Component\Bootstrap\Bootstrap;
use Symfony\Component\Yaml\Yaml;

$yamlParser = new Yaml();
$configurationsDirectory = __DIR__ . '/../app';
$bootstrap = new Bootstrap(Bootstrap::NIGHT_DEVELOPMENT_ENVIRONMENT, $configurationsDirectory, $yamlParser);

//var_dump($bootstrap());
$uri = $_SERVER['REQUEST_URI'];
$start = strpos('/MyApp/main.php', $uri) + strlen('/MyApp/main.php');
$length = strlen($uri) - $start;
$requestURI = substr($uri, $start, $length);

$bootstrap($requestURI);