<?php 

namespace Model;

class secciones extends ActiveRecord{

    protected static $tabla = 'Tipo';

    protected static $columnasDB = ['id', 'nombre', 'imagen'];

    public $id;
    public $nombre;
    public $imagen;

    public function __construct($args = []){
        
        $this->id = $args['id'] ?? null;
        $this->nombre = $args['nombre'] ?? '';
        $this->imagen = $args['imagen'] ?? '';             
    }

    public function validar(){
        if(!$this->nombre){
            self::$errores[] = 'Debes añadir un Nombre';
        }
    
    
        if(!$this->imagen){
            self::$errores[] = 'Debes añadir Una Imagen';
        }
                
        return self::$errores;

    }
}