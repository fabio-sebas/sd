<?php

use Illuminate\Http\Request;

define('LARAVEL_START', microtime(true));

require __DIR__.'/../vendor/autoload.php';

$app = require_once __DIR__.'/../bootstrap/app.php';

$request = Illuminate\Http\Request::capture();

$response = $app->handle($request);

$response->send();

$app->terminate($request, $response);
