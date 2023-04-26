<?php

use App\Controller\HomeController;
use App\Controller\PostController;
use App\Router\Route;

return  [
    new Route('/', HomeController::class, 'show'),
    new Route('/posts', PostController::class, 'showPosts')
];