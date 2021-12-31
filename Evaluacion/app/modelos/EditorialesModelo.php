<?php

class EditorialesModelo
{
  private $db;

  function __construct()
  {
    $this->db = new MySQLdb();
  }

  public function getEditoriales()
  {
    $data = $this->db->querySelect("SELECT * FROM editorial");
    return $data;
  }

  public function getEditorial($id)
  {
    $data = $this->db->querySelect("SELECT * FROM editorial WHERE id=" . $id);
    return $data;
  }

  public function insertarEditoriales($nom_editorial)
  {
    $sql = "INSERT INTO editorial VALUES(0,";
    $sql .= "'" . $nom_editorial . "' )";
    if ($this->db->queryNoSelect($sql)) {
      header("Location:" . RUTA_APP . "editoriales");
      exit();
    } else {
      exit("Error al insertar los datos de la editorial");
    }
  }

  public function modificarEditoriales($id, $nom_editorial)
  {
    $sql = "UPDATE editorial SET ";
    $sql .= "nom_editorial='" . $nom_editorial . "' ";
    $sql .= "WHERE id=" . $id;
    print $sql;
    if ($this->db->queryNoSelect($sql)) {
      header("Location:" . RUTA_APP . "editoriales");
      exit();
    } else {
      exit("Error al modificar los datos de la editorial");
    }
  }

  public function borrarEditorial($id)
  {
    $sql = "DELETE FROM editorial ";
    $sql .= "WHERE id=" . $id;
    if ($this->db->queryNoSelect($sql)) {
      header("Location:" . RUTA_APP . "editoriales");
      exit();
    } else {
      exit("Error al borrar la editorial");
    }
  }
}
