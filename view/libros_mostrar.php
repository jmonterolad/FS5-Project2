<?php include 'view/resources/includes/header.php'; ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Homepage</title>
  <link rel="stylesheet" href="view/css/index.css">
</head>

<body translate="no">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css"
    integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous" />
  <link href="https://fonts.googleapis.com/css?family=Poppins:200i,300,400&display=swap" rel="stylesheet" />
  <link href="https://fonts.googleapis.com/css?family=Raleway:700&display=swap" rel="stylesheet" />

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
            </tbody>
        </table>
    </div>

    <!-- <div class="libros-grid">
      <a href="https://codepen.io/codepen-io-mark_shchupak/pen/jOmrVqX" target="_blank" class="libros libros-tile">
        <img class="libros-image"
          src="https://scontent.flwo3-1.fna.fbcdn.net/v/t1.6435-9/118187669_1667736396735744_1852354351492205892_n.jpg?_nc_cat=106&ccb=1-3&_nc_sid=09cbfe&_nc_ohc=Gj52YBWKEQYAX_ZehEC&_nc_ht=scontent.flwo3-1.fna&oh=d17cdcdf3ce153287c2088cff7c10b17&oe=60ECC35B"
          alt="libro" />
        <p class="libros-title">
          <span class="code">&lt;</span>
          Tribute Page
          <span class="code">&#47;&gt;</span>
        </p>
      </a>
      <a href="https://codepen.io/codepen-io-mark_shchupak/pen/MWmexVJ" target="_blank" class="libros libros-tile">
        <img class="libros-image"
          src="https://fckarpaty.com/wp-content/uploads/content/gallery/2020/02/p1e1uc3f5p2qf1o2042n1lab1smd4.jpg"
          alt="libro" />
        <p class="libros-title">
          <span class="code">&lt;</span>
          FC Karpaty
          <span class="code">&#47;&gt;</span>
        </p>
      </a>
      <a href="https://codepen.io/codepen-io-mark_shchupak/pen/MWmexVJ" target="_blank" class="libros libros-tile">
        <img class="libros-image" src="https://boothype.com/wp-content/uploads/2021/04/black-football-boots.jpg"
          alt="libro" />
        <p class="libros-title">
          <span class="code">&lt;</span>
          Football Boots
          <span class="code">&#47;&gt;</span>
        </p>
      </a>
      <a href="https://codepen.io/wizly/pen/BlKxo" target="_blank" class="libros libros-tile">
        <img class="libros-image" src="https://getbootstrap.com/docs/5.0/assets/img/bootstrap-icons.png"
          alt="libro" />
        <p class="libros-title">
          <span class="code">&lt;</span>
          Bootstrap
          <span class="code">&#47;&gt;</span>
        </p>
      </a>
      <a href="https://codepen.io/codepen-io-mark_shchupak/pen/dyWXBXm" target="_blank" class="libros libros-tile">
        <img class="libros-image" src="https://cssreference.io/images/css-reference-share.png" alt="libro" />
        <p class="libros-title">
          <span class="code">&lt;</span>
          CSS Reference
          <span class="code">&#47;&gt;</span>
        </p>
      </a>
      <a href="https://codepen.io/iliadraznin/pen/JcqbE" target="_blank" class="libros libros-tile">
        <img class="libros-image" src="https://frontbackend.com/storage/css-clocks-post/css3-working-clock.gif"
          alt="libro" />
        <p class="libros-title">
          <span class="code">&lt;</span>
          Working Clock
          <span class="code">&#47;&gt;</span>
        </p>
      </a>
    </div>

    <a href="https://codepen.io/FreeCodeCamp/" class="btn btn-show-all" target="_blank">Show all<i
        class="fas fa-chevron-right"></i></a>
  </section> -->

</body>

</html>