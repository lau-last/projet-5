<?php

use App\Model\DatabaseConnect;
use App\Renderer\PhpRenderer;
use App\Router\Router;

return [
    'router' => static function () {
        return new Router(require 'routes.php');
    },
    'renderer' => static function () {
        return new PhpRenderer(dirname(__DIR__) . DIRECTORY_SEPARATOR . 'views' . DIRECTORY_SEPARATOR);
    },
    'database' => static function()  {
        return new DatabaseConnect('localhost:8889', 'myblog', 'root', 'root', array(
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ
        ));
    }
];