<?php

namespace App\Renderer;

final class PhpRenderer
{

    private string $dir;

    public function __construct(string $dir)
    {
        $this->dir = $dir;
    }

    public function render(string $path, array $params = []): string
    {
        extract($params);
        $views = $this->dir;
        ob_start();
        require  $views . $path;
        return  ob_get_clean();
    }
}