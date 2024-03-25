<?php

// Carga el archivo autoload de Composer
require __DIR__.'/../vendor/autoload.php';

// Crea una instancia de la aplicación Laravel
$app = new Illuminate\Foundation\Application(
    $_ENV['APP_BASE_PATH'] ?? dirname(__DIR__)
);

// Configura los servicios principales de la aplicación
$app->singleton(
    Illuminate\Contracts\Http\Kernel::class,
    App\Http\Kernel::class
);

$app->singleton(
    Illuminate\Contracts\Console\Kernel::class,
    App\Console\Kernel::class
);

$app->singleton(
    Illuminate\Contracts\Debug\ExceptionHandler::class,
    App\Exceptions\Handler::class
);

// Retorna la instancia de la aplicación
return $app;
