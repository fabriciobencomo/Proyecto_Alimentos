<?php 

namespace Model;

class clientes extends ActiveRecord{

    protected static $tabla = 'Clientes';

    protected static $columnasDB = ['id', 'nombre', 'pedido', 'email', 'precio', 'fecha', 'creado'];

    public $id;
    public $nombre;
    public $pedido;
    public $email;
    public $precio;
    public $fecha;
    public $creado;

    public function __construct($args = []){
        
        $this->id = $args['id'] ?? null;
        $this->nombre = $args['nombre'] ?? '';
        $this->pedido = $args['pedido'] ?? '';
        $this->email = $args['email'] ?? '';
        $this->precio = $args['precio'] ?? '';
        $this->fecha = $args['fecha'] ?? '';
        $this->creado = date('Y/m/d');
        
    }

    public function validar(){
        if(!$this->nombre){
            self::$errores[] = 'Debes añadir un Nombre';
        }
    
        if(!$this->pedido){
            self::$errores[] = 'Debes añadir un Pedido';
        }
    
        if(!$this->email){
            self::$errores[] = 'Debes añadir Email';
        }
    
        if(!$this->precio){
            self::$errores[] = 'Debes añadir un Precio';
        }
    
        if(!$this->fecha){
            self::$errores[] = 'Debes añadir una Fecha de Entrega';
        }
            
        return self::$errores;

    }
}