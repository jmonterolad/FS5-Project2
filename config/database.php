<?php 
    class Conectar{
        public static function Conexion(){
            $conexion = new mysqli(
                "localhost",
                "root",
                "Password1234",
                "tienda_de_libros"
            );
            return $conexion;
        }
    }


?>