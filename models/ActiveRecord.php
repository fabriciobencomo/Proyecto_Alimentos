<?php 

namespace Model;

class ActiveRecord {

    protected static $db;
    protected static $columnasDB = [];
    protected static $tabla = '';
    protected static $errores = [];

    //-----CRUD--------
    public function save(){
        if(!is_null($this->id)){
            $this->update();
        }else{
            $this->create();
        }
    }


    public function create(){
        $atributos = $this->sanitizeData();

        $stringInsert = join(', ' , array_keys($atributos));
        $stringValues = join(" ', '" , array_values($atributos));

        $query = "INSERT INTO " . static::$tabla . " ( ";
        $query .= $stringInsert; 
        $query .= " ) VALUES (' ";
        $query .= $stringValues; 
        $query .= " ') "; 

        $resultado = self::$db->query($query);

        if($resultado){
            header("Location: /admin");
        }
    }
    public function update(){
        $atributos = $this->sanitizeData();

        $values = [];
        foreach($atributos as $key => $value){
            $values[] = "{$key}='{$value}'";
        }

        $stringValues = join(',', $values);

        $query = "UPDATE " . static::$tabla .  " SET " . $stringValues . "WHERE id = '" . self::$db->escape_string($this->id) . "' LIMIT 1;";

        $resultado = self::$db->query($query);

        if($resultado){
            header("Location: /admin");
        }
        

    }
    public function delete(){
        $query = "DELETE FROM " . static::$tabla . " WHERE id = " . self::$db->escape_string($this->id) . " LIMIT 1";

        $resultado = self::$db->query($query);

        if($resultado){
            header("Location: /admin");
        }
    }

    //----Utilities----

    public function sanitizeData(){
        $atributos = $this->atributos();

        $sanitizado = [];

        foreach($atributos as $key => $value){
            $sanitizado[$key] = self::$db->escape_string($value);
        }
        return $sanitizado;
    }

    public function atributos(){
        $atributos = [];

        foreach(static::$columnasDB as $columna){
            if($columna === 'id') continue;
            $atributos[$columna] = $this->$columna;
        }

        return $atributos;
    }

    public function sync( $args = []){
        foreach($args as $key => $value){
            if(property_exists($this, $key) && !is_null($value)){
                $this->$key = $value;
            }
        }
    }

    //VALIDATE INFO 
    public function validar(){
        static::$errores = [];
        return static::$errores;
    }



    //-----Queries-----
    public static function find($id){
        $query = "SELECT * FROM " . static::$tabla . " WHERE id = ${id}";

        $resultado = self::query($query);

        return array_shift($resultado);
    }

    public static function get($limit){
        $query = "SELECT * FROM " . static::$tabla . " LIMIT ${limit}";

        $resultado = self::query($query);

        return $resultado;
    }

    public static function all(){
        $query = "SELECT * FROM " . static::$tabla;

        $resultado = self::query($query);

        return $resultado;
    }   

    public static function query($query){

        $resultado = self::$db->query($query);

        $array = [];

        while($registro = $resultado->fetch_assoc()){
            $array[] = static::convertToObject($registro);
        }

        $resultado->free();

        return $array;

    }

    public static function convertToObject($registro){
        $object = new static;

        foreach($registro as $key => $value){
            if(property_exists($object, $key)){
                $object->$key = $value;
            }
        }

        return $object;
    }

    public static function setDB($database){
        self::$db = $database;
    }

    public function deleteImage(){
        $fileExist = file_exists(CARPETA_IMG . $this->imagen);
            if($fileExist){
                unlink(CARPETA_IMG . $this->imagen);
            }
    }

    public function setImg($imagen){
        if(!is_null($this->id)){
            $this->deleteImage();
        }
        if($imagen){
            $this->imagen = $imagen;
        }
    }

    public static function getErrores(){
        return static::$errores;
    }

}