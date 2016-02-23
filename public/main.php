<?php

require_once __DIR__ . '/../vendor/autoload.php';

use Night\Component\Bootstrap\Bootstrap;
use Night\Component\Request\Request;

$generalConfigurations = [
    'environment' => Bootstrap::NIGHT_DEVELOPMENT_ENVIRONMENT,
    'configurationsDirectory' => __DIR__ . '/../app/confs',
    'configurationsFileExtension' => \Night\Component\FileParser\YAMLParser::FILE_EXTENSION,
    'templating' => [
        'engine' => \Night\Component\Templating\TwigTemplating::ENGINE,
        'templatesDirectory' => __DIR__ . '/../app/templates'
    ]
];

$bootstrap = new Bootstrap($generalConfigurations);
$request   = Request::newFromGlobals();

/**@var $response \Night\Component\Response\Response */
$response = $bootstrap($request);
if (is_null($response)) {
    exit(0);
}

$response->send();