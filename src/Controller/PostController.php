<?php

namespace App\Controller;

use App\Container;
use App\Model\DatabaseConnect;
use PDO;

class PostController extends Controllers
{
    public function showPosts()
    {
        $pdo = Container::get('database');

        $stmt = $pdo->query("SELECT * FROM article");
        $posts = $stmt->fetchAll();

        $this->view("post.php", ["posts"=>$posts]);
    }
}