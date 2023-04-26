<?php

namespace App\Router;

use LogicException;

class Route
{
    private string $path;
    private string $controllerClass;
    private string $action;

    public function __construct(string $path, string $controllerClass, string $action)
    {
        $this->path = $path;
        if (!class_exists($controllerClass)) {
            throw new LogicException("class doesn't exist");
        }
        $this->controllerClass = $controllerClass;
        if (!method_exists($controllerClass, $action)) {
            throw new LogicException("action doesn't exist");
        }
        $this->action = $action;
    }

    public function getPath(): string
    {
        return $this->path;
    }

    public function callAction(): void
    {
        $controller = new $this->controllerClass();
        $action = $this->action;
        $controller->$action();
    }
}