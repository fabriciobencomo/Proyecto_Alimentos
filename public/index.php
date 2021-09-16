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


//----AUTH------
$router->get('/admin', [clientesController::class,'index']);
//----CLIENTES-----
$router->get('/clientes', [clientesController::class,'admin']);
$router->post('/clientes', [clientesController::class,'delete']);
$router->get('/clientes/crear', [clientesController::class,'create']);
$router->post('/clientes/crear', [clientesController::class,'create']);
$router->get('/clientes/actualizar', [clientesController::class,'update']);
$router->post('/clientes/actualizar', [clientesController::class,'update']);

//----PRODUCTOS------
$router->get('/productos', [productosController::class,'admin']);
$router->post('/productos', [productosController::class,'delete']);
$router->get('/productos/crear', [productosController::class,'create']);
$router->post('/productos/crear', [productosController::class,'create']);
$router->get('/productos/actualizar', [productosController::class,'update']);
$router->post('/productos/actualizar', [productosController::class,'update']);


//------TIPO DE PRODUCTOS-----
//----PRODUCTOS------
$router->get('/tipos', [TipoController::class,'admin']);
$router->post('/tipos', [TipoController::class,'delete']);
$router->get('/tipos/crear', [TipoController::class,'create']);
$router->post('/tipos/crear', [TipoController::class,'create']);
$router->get('/tipos/actualizar', [TipoController::class,'update']);
$router->post('/tipos/actualizar', [TipoController::class,'update']);

$router->comporbarRutas();