<!DOCTYPE html>
<html lang="en">

<head>
<<<<<<< HEAD
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../../css/create.css">
  <title>Ingresa un libro</title>
</head>

<body>
  <div class="section">
    <h1>Ingresa los datos del libro</h1><br><br>

    <form class="form-label form-css-label" method="POST" action="../../../index.php?c=libros&a=guardar" autocomplete="off">
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

      <div class="wrap">
        <input class="btn" type="submit" value="Submite">
      </div>
    </form>
  </div>
=======
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../../css/create.css">
    <title>Ingresa un libro</title>
</head>

<body>
    <div class="section">
        <h1>Ingresa los datos del libro</h1><br><br>

        <form class="form-label form-css-label" method="POST" action="index.php?c=Libros&a=guardar" autocomplete="off">
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
>>>>>>> 677a204a37ce20d853fd91b974726376ac727bab
</body>

</html>