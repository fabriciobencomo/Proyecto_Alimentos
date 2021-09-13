<?php

namespace Controllers;

use Model\clientes;
use Model\productos;
use MVC\Router;

class clientesController {

    public static function index(Router $router){

        $clientes = clientes::all();
        $productos = Productos::all();

        $router->render("admin/admin", [
            'clientes' => $clientes,
            'productos' => $productos
        ]);
    }

    public static function admin(Router $router){

        $clientes = clientes::all();

        $router->render("clientes/datos", [
            'clientes' => $clientes,
        ]);
    }


    public static function create(Router $router){
        $cliente = new clientes();

        $errores = clientes::getErrores();

        if($_SERVER['REQUEST_METHOD'] === 'POST'){

            $cliente = new clientes($_POST);


            $errores = $cliente->validar();

            if(empty($errores)){
                $cliente->save();
            }
            
        }

        $router->render("clientes/crear", [
            'cliente' => $cliente,
            'errores' => $errores
        ]);
    }

    public static function update(Router $router){
        $id = redirectOrValidate('/clientes');
        $cliente = clientes::find($id);
        $errores = clientes::getErrores();

        if($_SERVER['REQUEST_METHOD'] === 'POST'){

            $args = $_POST['cliente'];

            $cliente->sync($args);

            $errores = $cliente->validar();
        
            if(empty($errores)){
                $cliente->save();
            }
            
        }

        $router->render("clientes/actualizar", [
            'cliente' => $cliente,
            'errores' => $errores
        ]);
    }
    
}