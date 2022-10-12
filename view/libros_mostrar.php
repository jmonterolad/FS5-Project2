<!-- <html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Crear un nuevo libro</h1>
    <form name = "nuevo" id = "nuevo"  action="index.php?c=Libros&a=guardar" method="POST">
        <input type="text" name="titulo" id="titulo" placeholder="Ingresar el titulo del libro..">
        <input type="text" name="autor" id="autor" placeholder="Ingresar el nombre del autor..">
        <input type="date" name="fecha_Publicidad" id="fecha_publicidad">
        <input type="text" name="categoria" id="categoria" placeholder="Ingresar la categoria del libro" ..>
        <input type="text" name="reseña" id="reseña" placeholder="Ingresar la reseña del libro..">
        <input type="text" name="edicion" id="edicion" placeholder="Ingresar la edicion del libro..">
        <input type="text" name="editorial" id="editorial" placeholder="Ingresar la editorial del libro" ..>

        //validacion para usar mascara de 6 digitos o 13 dudas consultar : Rodrigo
        //pre 2007
        <input type="number" name="ISB" placeholder="Ingresar el ISB.." data-inputmask: "9-9999-9999-9">
        //post2007
        <input type="number" name="ISB" placeholder="Ingresar el ISB.." data-inputmask:"999-9-99-999999-9">
        <input type="submit" value="Submit">
    </form>
</body>

</html> -->


<?php include 'resources/includes/header.php'; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="view/css/create.css">
    <title>Ingresa un libro</title>
</head>

<body>
    <div class="section">
        <h1>Ingresa los datos del libro</h1><br><br>
      
        <form class="form-label form-css-label" method = "POST" action="index.php?c=Libros&a=guardar" autocomplete = "off">
          <fieldset>
            <input id="ISBN" name="ISBN" type="text" autocomplete="off" required />
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
        </form>
        <div class="wrap">
            <button class="btn">button</button>
          </div>
      </div>
</body>

</html>

<!-- <?php include 'resources/includes/footer.php'; ?> -->