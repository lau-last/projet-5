<?php
// front controller

ini_set('display_errors', 'On');

require '../vendor/autoload.php';
(new \App\App())->handle();


