<?php 
    class Conectar{
        public static function Conexion(){
            $conexion = new mysqli(
                "localhost",
                "root",
                "",
                "tienda_de_libros"
            );
            return $conexion;
        }
    }


?>