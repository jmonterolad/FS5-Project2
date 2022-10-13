<?php
class LibrosController{
    public function __construct(){
        require_once "models/libros/librosModel.php";
    }

    // Funcion de vista
    public function index(){
        $objLibro = new Libros_Model();
        $data["libros"] = $objLibro->get_Libros();

        require_once "view/libros_mostrar.php";
    }

    //Funcion vista crear
    public function nuevo(){
        require_once "../view/admin/books/crear.php";
    }

    public function guardar(){
        $ISBN = $_POST['ISBN'];
        $titulo = $_POST['Titulo'];
        $autor = $_POST['Autor'];
        $fecha_publicacion = $_POST['Fecha_publicacion'];
        $categoria = $_POST['Categoria'];
        $reseña = $_POST['Reseña'];
        $edicion = $_POST['Edicion'];
        $editorial = $_POST['Editorial'];

        $objLibro = new Libros_Model();
        $objLibro->create_libro($ISBN,$titulo,$autor,$fecha_publicacion,$categoria,$reseña,$edicion,$editorial);
        
        $this->index();
    }


}

?>