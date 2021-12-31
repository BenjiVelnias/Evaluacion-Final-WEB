<!DOCTYPE html>
<html>

<head>
  <title>Dar de alta una editorial</title>
  <meta charset="utf-8">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel=StyleSheet href="style.css" type="text/css" media=screen>
</head>

<body>
  <form action='<?php print RUTA_APP . "editoriales/borrar/"; ?>' method="POST">
    <div class="container">
      <div class="row">
        <div class="col-md-12 bg-primary link-light">
          <h1>Asegurese antes de eliminar</h1>
        </div>
        <a class="btn btn-primary" href='<?php print RUTA_APP . "editoriales"; ?>'>Regresar</a>
      </div>
      <table class="table">
      <div class="mb-3">
          <label for="nom_editorial" class="form-label">Nombre editorial</label>
          <input type="text" class="form-control" id="nom_editorial" name="nom_editorial" disabled="disabled" value="<?php print $data["nom_editorial"]; ?>">
        </div>
        <tr>
          <td><input type="hidden" value="<?php print $data["id"]; ?>" name="id"></td>
          <button type="submit" class="btn btn-primary" value="Enviar">Enviar</button>
        </tr>
      </table>
      <p>ADVERTENCIA: Una vez borrado el registro NO se podrá recuperar.</p>
    </div>
  </form>
  



  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>

</html>