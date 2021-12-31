<?php

class LibrosModelo
{
  private $db;

  function __construct()
  {
    $this->db = new MySQLdb();
  }

  public function getLibros()
  {
    $data = $this->db->querySelect("SELECT * FROM libro");
    return $data;
  }

  public function getLibro($id)
  {
    $data = $this->db->querySelect("SELECT * FROM libro WHERE id=" . $id);
    return $data;
  }

  public function insertarLibros($titulo, $autor, $editorial, $isdn)
  {
    $sql = "INSERT INTO libro VALUES(0,";
    $sql .= "'" . $titulo . "', ";
    $sql .= "'" . $autor . "', ";
    $sql .= "'" . $editorial . "', ";
    $sql .= "'" . $isdn . "')";
    if ($this->db->queryNoSelect($sql)) {
      header("Location:" . RUTA_APP . "libros");
      exit();
    } else {
      exit("Error al insertar los datos del libro");
    }
  }

  public function modificarLibros($id, $titulo, $autor, $editorial)
  {
    $sql = "UPDATE libro SET ";
    $sql .= "titulo='" . $titulo . "', ";
    $sql .= "autor='" . $autor . "', ";
    $sql .= "editorial='" . $editorial . "' ";
    $sql .= "WHERE id=" . $id;
    print $sql;
    if ($this->db->queryNoSelect($sql)) {
      header("Location:" . RUTA_APP . "libros");
      exit();
    } else {
      exit("Error al modificar los datos del libro");
    }
  }

  public function borrarLibro($id)
  {
    $sql = "DELETE FROM libro ";
    $sql .= "WHERE id=" . $id;
    if ($this->db->queryNoSelect($sql)) {
      header("Location:" . RUTA_APP . "libros");
      exit();
    } else {
      exit("Error al borrar el libro");
    }
  }
}
