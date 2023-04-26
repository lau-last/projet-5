<?php

namespace App\Controller;

use App\Container;
use App\Renderer\PhpRenderer;
use App\Router\Router;

abstract class Controllers
{
    private PhpRenderer $renderer;

    public function __construct()
    {
        $this->renderer = Container::get('renderer');
    }

    public function view(string $path, array $params = []): void
    {
        echo $this->renderer->render($path, $params);
    }
}