<?php

namespace Controllers;


use Model\productos;
use MVC\Router;
use Intervention\Image\ImageManagerStatic as Image;
use Model\secciones;

class productosController {

    public static function admin(Router $router){

        $productos = productos::all();

        $router->render("productos/datos", [
            'productos' => $productos
        ]);
    }


    public static function create(Router $router){
        $producto = new productos();
        $tipos = secciones::all();
        $errores = productos::getErrores();

        if($_SERVER['REQUEST_METHOD'] === 'POST'){

            $producto = new productos($_POST['producto']);

            if($producto->cantidad >= 1){
                $producto->disponibilidad = true;
            }
            else{
                $producto->disponibilidad = false;
            }

            if(!is_dir(CARPETA_IMG)){
        
                mkdir(CARPETA_IMG);
            }
        
            $nombreImagen = md5( uniqid( rand(), true)) . ".jpg";
        
            if($_FILES['producto']['tmp_name']['imagen']){
                $image = Image::make($_FILES['producto']['tmp_name']['imagen'])->fit(800,600);
                $producto->setImg($nombreImagen);
            }
        

            $errores = $producto->validar();
        
            if(empty($errores)){
                $resultado = $producto->Save();

                debug($resultado);

                if($resultado){
                    $image->save(CARPETA_IMG . $nombreImagen);
                }
                else{
                    echo "Todo mal";
                }
            }
            
        }

        $router->render("productos/crear", [
            'producto' => $producto,
            'errores' => $errores,
            'tipos' => $tipos
        ]);
    }

    public static function update(Router $router){

        $id = redirectOrValidate('/propiedades/admin');
        $producto = productos::find($id);
        $tipos = secciones::all();
        $errores = productos::getErrores();

        if($_SERVER['REQUEST_METHOD'] === 'POST'){
            //Lleanmos el array
            $args = $_POST['producto'];
        
            //Sincronizamos los datos 
            $producto->sync($args);

            if($producto->cantidad >= 1){
                $producto->disponibilidad = 1;
            }
            else{
                $producto->disponibilidad = 0;
            }

        
            //Validamos si hay errores
            $errores = $producto->validar();
        
            //Genera nombre random
            $nombreImagen = md5( uniqid( rand(), true)) . ".jpg";
        
            //Subimos Imagen
           
            if($_FILES['producto']['tmp_name']['imagen']){
                $image = Image::make($_FILES['producto']['tmp_name']['imagen'])->fit(800,600);
                $producto->setImg($nombreImagen);
            }
        
           if(empty($errores)){
        
            if($_FILES['producto']['tmp_name']['imagen']){
                $image->save(CARPETA_IMG . $nombreImagen);
            }
        
            $producto->Save();
        
            } 
        }

        $router->render("productos/actualizar", [
            'producto' => $producto,
            'errores' => $errores,
            'tipos' => $tipos
        ]);

    }

    public static function delete(){
        if($_SERVER['REQUEST_METHOD'] === 'POST'){
            $id = $_POST['id'];
            $id = filter_var($id, FILTER_VALIDATE_INT);
            if($id){
                $producto = productos::find($id);
                $producto->Delete();
            }
        }
    }   
    
}