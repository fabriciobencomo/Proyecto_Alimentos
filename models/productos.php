<?php 

namespace Model;

class productos extends ActiveRecord{

    protected static $tabla = 'Productos';

    protected static $columnasDB = ['id', 'nombre', 'precio', 'imagen', 'descripcion', 'cantidad' , 'tipoId'];

    public $id;
    public $nombre;
    public $precio;
    public $imagen;
    public $descripcion;
    public $cantidad;
    public $tipoId;

    public function __construct($args = []){
    
        $this->nombre = $args['nombre'] ?? '';
        $this->precio = $args['precio'] ?? '';
        $this->imagen = $args['imagen'] ?? '';
        $this->descripcion = $args['descripcion'] ?? '';
        $this->cantidad = $args['cantidad'] ?? '';
        $this->tipoId = $args['tipoId'] ?? '';
        
        
    }

    public function validar(){
        if(!$this->nombre){
            self::$errores[] = 'Debes añadir un Nombre';
        }
    
        if(!$this->imagen){
            self::$errores[] = 'Debes añadir Una Imagen';
        }
    
        if(!$this->precio){
            self::$errores[] = 'Debes añadir un Precio';
        }
    
        if(!$this->descripcion){
            self::$errores[] = 'Debes añadir una descripcion';
        }

        if(!$this->cantidad){
            self::$errores[] = 'Debes añadir la cantidad en stock';
        }

        if(!$this->tipoId){
            self::$errores[] = 'Debes añadir el tipo del producto';
        }
            
        return self::$errores;

    }
}