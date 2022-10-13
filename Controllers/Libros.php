<?php
class LibrosController{
    public function __construct(){
        require_once "models/libros/librosModel.php";
    }

    // Funcion de vista
    public function index(){
        $objLibro = new Libros_Model();
        $data["libros"] = $objLibro->get_Libros();

        require_once "view/books/libros_mostrar.php";
    }

    //Funcion vista crear
    public function crear(){
        require_once "view/books/libros_Mostrar.php";
    }

    // Funcion crear

    public function guardar(){
        $ISBN = $_POST['ISBN'];
        $titulo = $_POST['Titulo'];
        $fecha_publicacion = $_POST['Fecha_publicacion'];
        $autor = $_POST['Autor'];
        $categoria = $_POST['Categoria'];
        $reseña = $_POST['Reseña'];
        $edicion = $_POST['Edicion'];
        $editorial = $_POST['Editorial'];

        $objLibro = new Libros_Model();
        $objLibro->create_libro($ISBN,$titulo,$fecha_publicacion,$autor,$categoria,$reseña,$edicion,$editorial);
        
        $this->index();
    }

    // Funcion de editar y eliminar

    public function editar(){
        $objLibro = new Libros_Model();
        $data["libros"] = $objLibro->get_Libros();

        require_once "view/books/manage.php";
    }


}

?>