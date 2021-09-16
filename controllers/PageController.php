<?php

namespace Controllers;
use MVC\Router;

class PageController{

    public static function index(Router $router){
        $inicio = true;
        $router->render('pages/index', [
            "inicio" => $inicio
        ]);
    }

}