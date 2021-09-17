<?php

namespace Controllers;
use MVC\Router;
use Model\secciones;
use Model\productos;

class PageController{

    public static function index(Router $router){
        $inicio = true;
        $tipos = secciones::all();
        $router->render('pages/index', [
            "inicio" => $inicio,
            'tipos' => $tipos
        ]);
    }

    public static function productos(Router $router){
        $id = redirectOrValidate('/');
        $seccion = secciones::find($id);
        $productos = productos::all();
        $router->render('pages/tipoProducto', [
            'seccion' => $seccion,
            'productos' => $productos
        ]);
    }

}