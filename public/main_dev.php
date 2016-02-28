<?php

require_once __DIR__ . '/../vendor/autoload.php';

use Night\Component\Bootstrap\Bootstrap;
use Night\Component\Profiling\Profiler;
use Night\Component\Request\Request;

$bootstrap = new Bootstrap();
$request   = Request::newFromGlobals();

Profiler::enable();

/**@var $response \Night\Component\Response\Response */
$response = $bootstrap($request);

$response->send();