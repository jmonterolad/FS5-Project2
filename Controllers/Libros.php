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
        require_once "view/books/libros_mostrar.php";
    }

    // Funcion vista manage
    // public function manage(){
    //     $objLibro = new Libros_Model();
    //     $data["libros"] = $objLibro->get_Libros();

    //     require_once "view/books/manage.php";
    // }

    // Funcion vista modificar
    public function modificar_vista(){
        $objLibro = new Libros_Model();
        $data["libros"] = $objLibro->get_Libros();

        require_once "view/books/modificar.php";
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

    // Funcion vista update
    public function modificar($id){
        $objLibro = new Libros_Model();

        $data['id'] = $id;
        $data['libros'] = $objLibro->get_uniqueRow($id);
        require_once "view/books/modificar.php";
    }

    // Funcion update
    public function actualizar(){
        $id = $_POST['id'];
        $ISBN = $_POST['ISBN'];
        $titulo = $_POST['Titulo'];
        $autor = $_POST['Autor'];
        $fecha_publicacion = $_POST['Fecha_publicacion'];
        $categoria = $_POST['Categoria'];
        $reseña = $_POST['Reseña'];
        $edicion = $_POST['Edicion'];
        $editorial = $_POST['Editorial'];

        $objLibro = new Libros_Model();
        $objLibro->actualizar($id,$ISBN,$titulo,$autor,$fecha_publicacion,$categoria,$reseña,$edicion,$editorial);
        
        $this->index();
    }

    // Funcion delete
    public function eliminar($id){
        $objLibro = new Libros_Model();
        $objLibro->eliminar($id);
        $this->index();
    }

}

?>