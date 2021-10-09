<?php

namespace Controllers;
use MVC\Router;
use Model\productos;
use Model\secciones;
use PHPMailer\PHPMailer\PHPMailer;

class PageController{

    public static function index(Router $router){
        $inicio = true;
        $tipos = secciones::all();
        $mensaje = null;


        if($_SERVER['REQUEST_METHOD'] === 'POST'){
            $respuestas = $_POST['respuestas'];

            //Configuracion SMTP
            $phpmailer = new PHPMailer();
            $phpmailer->isSMTP();
            $phpmailer->Host = 'smtp.mailtrap.io';
            $phpmailer->SMTPAuth = true;
            $phpmailer->Port = 2525;
            $phpmailer->Username = '8f5c775988f8c5';
            $phpmailer->Password = 'bcb7ee6b72fb9e';
            $phpmailer->SMTPSecure = 'tls';

            //configuracion de los mails
            $phpmailer->setFrom('Thefood@food.com');
            $phpmailer->addAddress('admin@thefood.com', 'thefood.com');
            $phpmailer->Subject = 'Tienes un Mensaje Nuevo';

            //Habilitar html
            $phpmailer->isHTML(true);
            $phpmailer->CharSet = 'UTF-8';

            //Definir contenido
            $contenido = '<html>';
            $contenido .= '<p>You Got a New Message</p>'  ;
            $contenido .= '<p>Name: ' .$respuestas['nombre'] . '</p>'  ;
            $contenido .= '<p>Mail: ' .$respuestas['mail'] . '</p>'  ;
            $contenido .= '<p>About: ' .$respuestas['asunto'] . '</p>'  ;
            $contenido .= '<p>Additional Details' .$respuestas['extra'] . '</p>'  ;

            //Enviar de forma condicional los datos
            $contenido  .= '</html>';

            $phpmailer->Body = $contenido;

            //Enviar mail
            if($phpmailer->send()){
                $mensaje = "Your Message was Send";
            }else {
                $mensaje = "Your Message was not Send";
            }

        }      
        $router->render('pages/index', [
            "inicio" => $inicio,
            'tipos' => $tipos,
            'mensaje' => $mensaje
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