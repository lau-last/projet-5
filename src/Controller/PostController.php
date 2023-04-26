<?php

namespace App\Controller;

use App\Model\DatabaseConnect;
use PDO;

class PostController extends Controllers
{
    public function showPosts()
    {
        $pdo = (new DatabaseConnect('localhost:8889', 'myblog', 'root', 'root', array(
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ
        )))->getPDO();

        $stmt = $pdo->query("SELECT * FROM article");
        $posts = $stmt->fetchAll();

        $this->view("post.php", ["posts"=>$posts]);
    }
}