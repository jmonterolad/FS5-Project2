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
    <section class="hero">
        <div class="conte">
        <div class="textos-hero">
            <h1>BIENVENIDOS</h1>
        </div>
        </div>
        <div class="svg-hero" style="height: 150px; overflow: hidden;">
            <svg viewBox="0 0 500 150" preserveAspectRatio="none" style="height: 100%; width: 100%;">
                <path d="M0.00,49.99 C150.00,150.00 349.21,-49.99 500.00,49.99 L500.00,150.00 L0.00,150.00 Z"
                    style="stroke: none; fill: #35858b;"></path>
            </svg>
        </div>
    </section>


    <section  class="container">
        <div class="libros">
            <table border="1px">
                <thead>
                    <tr>
                        <th>ISBN</th>
                        <th>Titulo</th>
                        <th>Autor</th>
                        <th>Fecha de publicacion</th>
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
                        echo "<td>".$data["Autor"]."</td>";
                        echo "<td>".$data["Fecha_publicacion"]."</td>";
                        echo "<td>".$data["Categoria"]."</td>";
                        echo "<td>".$data["Reseña"]."</td>";
                        echo "<td>".$data["Edicion"]."</td>";
                        echo "<td>".$data["Editorial"]."</td>";
                        echo "<td><a href = 'index.php?c=Libros&a=modificar&id=".$data["Id"]."'>Editar</a></td>";
                        echo "<td><a href = 'index.php?c=Libros&a=eliminar&id=".$data["Id"]."'>Eliminar</a></td>";
                        echo "</tr>";
                    }
                ?>
                </tbody>
            </table>
        </div>
    </section>
</body>

</html>