<?php

namespace Controllers;


use Model\productos;
use MVC\Router;

class productosController {

    public static function admin(Router $router){

        $productos = productos::all();

        $router->render("productos/datos", [
            'productos' => $productos
        ]);
    }


    public static function create(Router $router){
        $producto = new productos();

        $errores = productos::getErrores();

        if($_SERVER['REQUEST_METHOD'] === 'POST'){

            $producto = new productos($_POST['producto']);

            $errores = $producto->validar();
        
            if(empty($errores)){
                $producto->Save();
            }
            
        }

        $router->render("productos/crear", [
            'producto' => $producto,
            'errores' => $errores
        ]);
    }
    
}