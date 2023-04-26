<?php

namespace App\Controller;

use App\Router\Router;

abstract class Controllers
{
    private string $viewsDir;

    public function __construct()
    {
        $this->viewsDir = (new \App\App())->getViewsDir();
    }

    public function view(string $path, array $params = []): void
    {
        extract($params);
        $views = $this->viewsDir;
        ob_start();
        require  $views . $path;
        $content = ob_get_clean();
        require  $views . '/layout.php';
    }
}