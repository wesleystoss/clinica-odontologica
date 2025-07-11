<?php
namespace Core;

class Router {
    public function dispatch() {
        $controllerName = 'HomeController';
        $controllerClass = 'Controllers\\' . $controllerName;
        $controller = new $controllerClass();
        $controller->index();
    }
}
