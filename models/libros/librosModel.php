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
        public function create_libro($ISBN,$titulo,$fecha_publicacion,$autor,$categoria,$reseña,$edicion,$editorial){
            $query = "INSERT INTO libros (ISBN,Titulo,Fecha_publicacion,Autor,Categoria,Reseña,Edicion,Editorial) VALUES ('$ISBN','$titulo','$fecha_publicacion','$autor','$categoria','$reseña','$edicion','$editorial')";
            $result = $this->db->query($query);
            if($result){
                echo "Libro agregado";
            }else{
                echo "Error al agregar libro";
            }
        }

        // Funcion para create
        // public function insertar($ISBN,$titulo,$fecha_publicacion,$autor,$categoria,$reseña,$edicion,$editorial){
        //     $result = $this->db->query("INSERT INTO libros (ISBN, Titulo, Fecha_publicacion, Autor, Categoria, Reseña, Edicion, Editorial) 
        //     VALUES ('$ISBN','$titulo','$fecha_publicacion','$autor','$categoria','$reseña','$edicion','$editorial')");
        // }

        // Funcion para update
        public function actualizar($ISBN,$titulo,$fecha_publicacion,$autor,$categoria,$reseña,$edicion,$editorial){
            $result = $this->db->query("UPDATE libros SET ISBN = '$ISBN', Titulo = '$titulo', Fecha_publicacion = '$fecha_publicacion', Autor = '$autor', Categoria = '$categoria', Reseña = '$reseña', Edicion = '$edicion', Editorial = '$editorial' WHERE ISBN = '$ISBN'");
        }

        // Funcion para delete
        public function eliminar($id){
            $result = $this->db->query("DELETE FROM libros WHERE ISBN = '$id'");
        }



        // public function create_libro($ISBN,$titulo,$fecha_publicacion,$autor,$categoria,$reseña,$edicion,$editorial){
        //     $result =$this->db->query("INSERT INTO libros(ISBN,Titulo,Fecha_publicacion,Autor,Categoria,Reseña,Edicion,Editorial) 
        //     VALUES('$ISBN','$titulo','$fecha_publicacion','$autor','$categoria','$reseña','$edicion','$editorial')");
        // }

        //funcion eliminar 
        // public function delete_libro($id) { //ID
        //     $query = "DELETE FROM libros where ID = ${id}";
        //     $resultado = mysql_query($db, $query);
    
    
        // }

    

    
    
    }

     




?>