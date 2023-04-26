<?php

use App\Controller\HomeController;
use App\Controller\PostController;
use App\Router\Route;


return [
    'routes' => [
        new Route('/', HomeController::class, 'show'),
        new Route('/posts', PostController::class, 'showPosts')
    ],
    'views_dir' => dirname(__DIR__) . DIRECTORY_SEPARATOR . 'views' . DIRECTORY_SEPARATOR
];