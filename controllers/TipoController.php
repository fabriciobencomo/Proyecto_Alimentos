<?php

namespace Controllers;


use Model\secciones;
use MVC\Router;
use Intervention\Image\ImageManagerStatic as Image;

class TipoController {

    public static function admin(Router $router){

        $secciones = secciones::all();

        $router->render("tipos/datos", [
            'secciones' => $secciones
        ]);
    }


    public static function create(Router $router){
        $seccion = new secciones();

        $errores = secciones::getErrores();

        if($_SERVER['REQUEST_METHOD'] === 'POST'){

            $seccion = new secciones($_POST['seccion']);

            if(!is_dir(CARPETA_IMG)){
        
                mkdir(CARPETA_IMG);
            }
        
            $nombreImagen = md5( uniqid( rand(), true)) . ".jpg";
        
            if($_FILES['seccion']['tmp_name']['imagen']){
                $image = Image::make($_FILES['seccion']['tmp_name']['imagen'])->fit(467,262);
                $seccion->setImg($nombreImagen);
            }
        

            $errores = $seccion->validar();
            
            if(empty($errores)){
                $image->save(CARPETA_IMG . $nombreImagen);
                debug($seccion->Save());
            }
            
        }

        $router->render("tipos/crear", [
            'seccion' => $seccion,
            'errores' => $errores
        ]);
    }

    public static function update(Router $router){

        $id = redirectOrValidate('/tipos/admin');
        $seccion = secciones::find($id);
        $errores = secciones::getErrores();

        if($_SERVER['REQUEST_METHOD'] === 'POST'){
            //Lleanmos el array
            $args = $_POST['seccion'];
        
            //Sincronizamos los datos 
            $seccion->sync($args);

        
            //Validamos si hay errores
            $errores = $seccion->validar();
        
            //Genera nombre random
            $nombreImagen = md5( uniqid( rand(), true)) . ".jpg";
        
            //Subimos Imagen
           
            if($_FILES['seccion']['tmp_name']['imagen']){
                $image = Image::make($_FILES['seccion']['tmp_name']['imagen'])->fit(800,600);
                $seccion->setImg($nombreImagen);
            }
        
           if(empty($errores)){
        
            if($_FILES['producto']['tmp_name']['imagen']){
                $image->save(CARPETA_IMG . $nombreImagen);
            }
        
            $seccion->Save();
        
            } 
        }

        $router->render("tipos/actualizar", [
            'seccion' => $seccion,
            'errores' => $errores
        ]);

    }

    public static function delete(){
        if($_SERVER['REQUEST_METHOD'] === 'POST'){
            $id = $_POST['id'];
            $id = filter_var($id, FILTER_VALIDATE_INT);
            if($id){
                $seccion = secciones::find($id);
                $seccion->Delete();
            }
        }
    }   
    
}