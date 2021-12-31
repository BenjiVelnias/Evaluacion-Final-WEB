<!DOCTYPE html>
<html>

<head>
  <title>Lista de libros</title>
  <meta charset="utf-8">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel=StyleSheet href="style.css" type="text/css" media=screen>
</head>

<body>
  <div class="container">
    <div class="row">
      <div class="col-md-12 bg-primary link-light">
        <h1>Bienvenidos a la biblioteca</h1>
      </div>
    </div>
    <div class="row mt-4">
      <div class="col-md-12">
        <table class="table">
          <thead>
            <th scope="col">id</th>
            <th scope="col">Titulo</th>
            <th scope="col">Autor</th>
            <th scope="col">Editorial</th>
            <th scope="col">Modificar</th>
            <th scope="col">Borrar</th>
          </thead>
          <tbody>
            <?php
            for ($i = 0; $i < count($data); $i++) {
              print "<tr>";
              print "<td>" . $data[$i]["id"] . "</td>";
              print "<td>" . $data[$i]["titulo"] . "</td>";
              print "<td>" . $data[$i]["autor"] . "</td>";
              print "<td>" . $data[$i]["editorial"] . "</td>";
              print "<td><a href='" . RUTA_APP . "libros/modificar/" . $data[$i]["id"] . "'>Modificar</a></td>";
              print "<td><a href='" . RUTA_APP . "libros/borrar/" . $data[$i]["id"] . "'>Borrar</a></td>";
              print "</tr>";
            }
            ?>
          </tbody>
        </table>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12 d-flex justify-content-end">
        <a class="btn btn-primary" href='<?php print RUTA_APP . "libros/crea/"; ?>'>Crear un libro</a>
      </div>
    </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>




</html>