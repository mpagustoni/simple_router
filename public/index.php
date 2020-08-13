<?php

define('__APP_ROOT__', dirname(__DIR__));

require __APP_ROOT__ . '/autoload.php';



$router = new src_Router();

$router

    ->get('/home', function () {
        ob_start();
        require dirname(__DIR__) . "/view/home.php";
        $html = ob_get_contents();
        ob_end_clean();
        return $html;
    });


echo $router($router->method(), $router->uri());
