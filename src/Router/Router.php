<?php

namespace App\Router;

final class Router
{

    private array $routes;

    public function __construct(array $routes)
    {
        $this->routes = $routes;
    }

    public function match(string $url): Route
    {
        foreach ($this->routes as $route) {
            if ($_SERVER['REQUEST_URI'] === $route->getPath()) {
                return $route;
            }
        }
        throw new \Exception('Route not found');
    }
}