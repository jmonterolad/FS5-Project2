<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Manage</title>
    <link rel="stylesheet" href="../css/header.css">
    <link rel="stylesheet" href="../css/index.css">
</head>

<body translate="no">

    <header>
        <nav>
            <div>
                <a href="#" class="logo"><img src="../resources/img/Logo Kingdom_Mesa de trabajo 1.png" alt=""></a>
            </div>
            <div class="etiqueta">
                <a class="link" href="../../index.php">INICIO</a>
                <a class="link" href="crear.php">AGREGAR</a>
                <a class="link" href="#">ADMINISTRAR</a>
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
                        <th>Autor</th>
                        <th>Fecha de publicacion</th>
                        <th>Categoria</th>
                        <th>Reseña</th>
                        <th>Edicion</th>
                        <th>Editorial</th>
                        <th>Editar</th>
                        <th>Eliminar</th>
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
                        echo "</tr>";
                    }
                ?>
                </tbody>
            </table>
        </div>
</body>

</html>