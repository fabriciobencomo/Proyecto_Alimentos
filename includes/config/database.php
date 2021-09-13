<?php

function connectDB() : mysqli{
    $host = 'localhost';
    $user = 'root';
    $password = '';
    $dbName = 'DeaDia';

    $db = new mysqli($host, $user, $password, $dbName);

    if(!$db){
        echo "Error de Conexion";
        exit;
    }

    return $db;
}