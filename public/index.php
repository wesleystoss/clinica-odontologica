<?php
// Autoload simples
spl_autoload_register(function ($class) {
    $base_dir = __DIR__ . '/../app/';
    $class = str_replace('\\', '/', $class);
    $file = $base_dir . $class . '.php';
    if (file_exists($file)) {
        require $file;
    }
});

use Core\Router;

$router = new Core\Router();
$router->dispatch();
