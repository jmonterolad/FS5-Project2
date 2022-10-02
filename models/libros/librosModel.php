<?php 
    class Libros_Model{
        private $db;
        private $libro;
        

        public function __construct(){
            $this->db = Conectar::Conexion();
            $this->libro = array();
        }


        //Funcion guardar consulta
        public function create_libro($ISBN,$titulo,$fecha_publicacion,$autor,$categoria,$reseña,$edicion,$editorial){
            $result =$this->db->query("INSERT INTO libros(ISBN,Titulo,Fecha_publicacion,Autor,Categoria,Reseña,Edicion,Editorial) VALUES('$ISBN','$titulo','$fecha_publicacion','$autor','$categoria','$reseña','$edicion','$editorial')");
        }

        public function delete_libro($id) { //ID
            $query = "DELETE FROM libros where ID = ${id}";
            $resultado = mysql_query($db, $query);
    
    
        }
    
    }

     




?>