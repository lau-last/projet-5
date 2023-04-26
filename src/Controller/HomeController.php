<?php

namespace App\Controller;

class HomeController extends Controllers
{
    public function show(){
        $this->view("home.php");
    }
}