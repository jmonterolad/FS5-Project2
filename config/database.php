<?php 
    class Conectar{
        public static function Conexion(){
            $conexion = new mysqli(
                "localhost",
                "root",
                "Jugada9*",
                "tienda_de_libros"
            );
            return $conexion;
        }
    }


?>