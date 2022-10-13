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

        // Create a base de datos
        public function create_libro($ISBN,$titulo,$autor,$fecha_publicacion,$categoria,$reseña,$edicion,$editorial){
            $query = "INSERT INTO libros (ISBN,Titulo,Autor,Fecha_publicacion,Categoria,Reseña,Edicion,Editorial) VALUES ('$ISBN','$titulo','$autor','$fecha_publicacion','$categoria','$reseña','$edicion','$editorial')";
            $result = $this->db->query($query);
            if($result){
                echo "Libro agregado";
            }else{
                echo "Error al agregar libro";
            }
        }

        // Funcion para update
        public function modificar($id,$ISBN,$titulo,$autor,$fecha_publicacion,$categoria,$reseña,$edicion,$editorial){
            $result = $this->db->query("UPDATE libros SET ISBN = '$ISBN', Titulo = '$titulo', Autor = '$autor', Fecha_publicacion = '$fecha_publicacion', Categoria = '$categoria', Reseña = '$reseña', Edicion = '$edicion', Editorial = '$editorial' WHERE id = '$id'");
            return $result;
        }

        // Registro unico
        public function get_uniqueRow($id){
            $query = "SELECT * FROM libros WHERE id = '$id' LIMIT 1";
            $result = $this->db->query($query);
            $row = $result->fetch_assoc();
            return $row;
        }

        // Funcion para eliminar
        public function eliminar($id){
            $result = $this->db->query("DELETE FROM libros WHERE id = '$id'");
            return $result;
        }
    }

     




?>