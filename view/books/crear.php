<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/create.css">
    <link rel="stylesheet" href="../css/header.css">
    <title>Ingresa un libro</title>
</head>
<body>
    <header>
        <nav>
            <div>
                <a href="#" class="logo"><img src="../resources/img/Logo Kingdom_Mesa de trabajo 1.png" alt=""></a>
            </div>
            <div class="etiqueta">
                <a class="link" href="../../index.php">INICIO</a>
                <a class="link" href="#">AGREGAR</a>
                <a class="link" href="manage.php">ADMINISTRAR</a>
            </div>
        </nav>
    </header>
    <div class="section">
        <h1>Ingresa los datos del libro</h1><br><br>

<<<<<<< HEAD
        <form class="form-label form-css-label" method="POST" action="../../index.php?c=Libros&a=guardar" autocomplete="off">
=======
        <form class="form-label form-css-label" method="POST" action="../../index.php?c=Libros&a=guardar"
            autocomplete="off">
>>>>>>> fa4078416f8c2dfd1ff1042255e420f99d36a6c9
            <fieldset>
                <input id="ISBN" name="ISBN" type="number" autocomplete="off" required />
                <label for="ISBN">ISBN</label>
            </fieldset>
            <fieldset>
                <input id="Titulo" name="Titulo" type="text" autocomplete="off" required />
                <label for="Titulo">Titulo</label>
            </fieldset>
            <fieldset>
                <input id="Fecha_publicacion" name="Fecha_publicacion" type="text" autocomplete="off" required />
                <label for="Fecha_publicacion">Fecha publicacion</label>
            </fieldset>
            <fieldset>
                <input id="Autor" name="Autor" type="text" autocomplete="off" required />
                <label for="Autor">Autor</label>
            </fieldset>
            <fieldset>
                <input id="Categoria" name="Categoria" type="text" autocomplete="off" required />
                <label for="Categoria">Categoria</label>
            </fieldset>
            <fieldset>
                <input id="Reseña" name="Reseña" type="text" autocomplete="off" required />
                <label for="Reseña">Reseña</label>
            </fieldset>
            <fieldset>
                <input id="Edicion" name="Edicion" type="text" autocomplete="off" required />
                <label for="Edicion">Edicion</label>
            </fieldset>
            <fieldset>
                <input id="Editorial" name="Editorial" type="text" autocomplete="off" required />
                <label for="Editorial">Editorial</label>
            </fieldset>
            <br> <br>

            <div class="wrap">
                <input class="btn" type="submit" value="send" name="Submit">
            </div>
        </form>
    </div>
</body>

</html>