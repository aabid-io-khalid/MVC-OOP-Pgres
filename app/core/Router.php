<?php

namespace App\Core;

class Router {
    protected $routes = [];

    public function get($path, $controller, $method) {
        $this->routes['GET'][$path] = [$controller, $method];
    }

    public function post($path, $controller, $method) {
        $this->routes['POST'][$path] = [$controller, $method];
    }

    public function dispatch() {
        $uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
        $method = $_SERVER['REQUEST_METHOD'];

        foreach ($this->routes[$method] as $route => [$controller, $action]) {
            
            $pattern = preg_replace('/\{([a-zA-Z0-9_]+)\}/', '([0-9]+)', $route);
            $pattern = str_replace('/', '\/', $pattern);
            
            if (preg_match('/^' . $pattern . '$/', $uri, $matches)) {
                array_shift($matches); 
                $controllerInstance = new $controller();
                $controllerInstance->$action(...$matches);
                return;
            }
        }

        http_response_code(404);
        echo "404 - Not Found";
    }
}
