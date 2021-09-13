<?php
require __DIR__ . "/../includes/app.php";

use MVC\Router;

use Controllers\clientesController;
use Controllers\productosController;
use Controllers\PageController;


$router = new Router();

//-----PAGES-----
$router->get('/', [PageController::class,'index']);
$router->post('/', [PageController::class,'index']);
$router->get('/nosotros', [PageController::class,'nosotros']);


//----AUTH------
$router->get('/admin', [clientesController::class,'index']);
//----CLIENTES-----
$router->get('/clientes', [clientesController::class,'admin']);
$router->get('/clientes/crear', [clientesController::class,'create']);
$router->post('/clientes/crear', [clientesController::class,'create']);
$router->get('/clientes/actualizar', [clientesController::class,'update']);
$router->post('/clientes/actualizar', [clientesController::class,'update']);

//----PRODUCTOS------
$router->get('/productos', [productosController::class,'admin']);
$router->get('/productos/crear', [productosController::class,'create']);
$router->post('/productos/crear', [productosController::class,'create']);
$router->get('/productos/actualizar', [productosController::class,'update']);
$router->post('/productos/actualizar', [productosController::class,'update']);

$router->comporbarRutas();