<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Homepage</title>
    <link rel="stylesheet" href="view/css/index.css">
    <link rel="stylesheet" href="view/css/header.css">
</head>

<body translate="no">

    <header>
        <nav>
            <div>
                <a href="#" class="logo"><img src="view/resources/img/Logo Kingdom_Mesa de trabajo 1.png" alt=""></a>
            </div>
            <div class="etiqueta">
                <a class="link" href="#">INICIO</a>
                <a class="link" href="view/books/crear.php">AGREGAR</a>
                <a class="link" href="view/books/manage.php">ADMINISTRAR</a>
            </div>
        </nav>
    </header>


    <section id="libros-id" class="libros-section">
        <h2 class="libros-section-header">Inventario de libros</h2>

        <div class="libros-grid">
            <table>
                <thead>
                    <tr>
                        <th>ISBN</th>
                        <th>Titulo</th>
                        <th>Fecha de publicacion</th>
                        <th>Autor</th>
                        <th>Categoria</th>
                        <th>Reseña</th>
                        <th>Edicion</th>
                        <th>Editorial</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    foreach($data["libros"] as $data){
                        echo "<tr>";
                        echo "<td>".$data["ISBN"]."</td>";
                        echo "<td>".$data["Titulo"]."</td>";
                        echo "<td>".$data["Fecha_publicacion"]."</td>";
                        echo "<td>".$data["Autor"]."</td>";
                        echo "<td>".$data["Categoria"]."</td>";
                        echo "<td>".$data["Reseña"]."</td>";
                        echo "<td>".$data["Edicion"]."</td>";
                        echo "<td>".$data["Editorial"]."</td>";
                        echo "</tr>";
                    }
                ?>
                <tr>
                    <th><a href="view/books/modificar.php">Actualizar</a></th>
                    <th><a href="view/book/eliminar.php">Eliminar</a></th>
                </tr>
                </tbody>
            </table>
        </div>
</body>

</html>