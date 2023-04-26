<?php

namespace App;

use App\Router\Route;
use App\Router\Router;
use Exception;

final class App
{
    /**
     * @var array<string,object>
     */
    private array $services;

    public function __construct()
    {
        Container::init(require '../config/objets.php');
    }

    public function handle(): void
    {
        $route = Container::get('router')->match($_SERVER['REQUEST_URI']);
        $route->callAction();
    }

}