<?php 
    class Libros_Model{
        private $db;
        private $libros;
        

        public function __construct(){
            $this->db = Conectar::Conexion();
            $this->libros = array();
        }

        // Consulta a base de datos
        public function get_Libros(){
            $query = "SELECT * FROM libros";
            $result = $this->db->query($query);

            while ($row = $result->fetch_assoc()){
                $this->libros[] = $row;
            }
            return $this->libros;
        }


        //Funcion guardar consulta
        public function create_libro($ISBN,$titulo,$fecha_publicacion,$autor,$categoria,$reseña,$edicion,$editorial){
            $result =$this->db->query("INSERT INTO libros(ISBN,Titulo,Fecha_publicacion,Autor,Categoria,Reseña,Edicion,Editorial) 
            VALUES('$ISBN','$titulo','$fecha_publicacion','$autor','$categoria','$reseña','$edicion','$editorial')");
        }

        //funcion eliminar 
        // public function delete_libro($id) { //ID
        //     $query = "DELETE FROM libros where ID = ${id}";
        //     $resultado = mysql_query($db, $query);
    
    
        // }

    

    
    
    }

     




?>