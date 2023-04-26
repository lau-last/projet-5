<?php

namespace App;

use App\Router\Route;
use App\Router\Router;
use Exception;

final class App
{
    private array $config;
    private string $viewsDir;
    private Router $router;

    public function __construct()
    {
        $this->config = require '../config/config.php';
        $this->viewsDir = $this->config['views_dir'];
        $this->router = new Router($this->config['routes']);
    }


    public function handle(): void
    {
        $route = $this->router->match($_SERVER['REQUEST_URI']);
        $route->callAction();
    }

    public function getViewsDir(): string
    {
        return $this->viewsDir;
    }

}