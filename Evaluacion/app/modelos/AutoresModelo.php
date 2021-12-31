<?php

class AutoresModelo
{
    private $db;

    function __construct()
    {
        $this->db = new MySQLdb();
    }

    public function getAutores()
    {
        $data = $this->db->querySelect("SELECT * FROM autor");
        return $data;
    }

    public function getAutor($id)
    {
        $data = $this->db->querySelect("SELECT * FROM autor WHERE id=" . $id);
        return $data;
    }

    public function insertarAutores($nom_autor)
    {
        $sql = "INSERT INTO autor VALUES(0,";
        $sql .= "'" . $nom_autor . "' )";
        if ($this->db->queryNoSelect($sql)) {
            header("Location:" . RUTA_APP . "autores");
            exit();
        } else {
            exit("Error al insertar los datos del autor");
        }
    }

    public function modificarAutores($id, $nom_autor)
    {
        $sql = "UPDATE autor SET ";
        $sql .= "nom_autor='" . $nom_autor . "' ";
        $sql .= "WHERE id=" . $id;
        print $sql;
        if ($this->db->queryNoSelect($sql)) {
            header("Location:" . RUTA_APP . "autores");
            exit();
        } else {
            exit("Error al modificar los datos del autor");
        }
    }

    public function borrarAutor($id)
    {
        $sql = "DELETE FROM autor ";
        $sql .= "WHERE id=" . $id;
        if ($this->db->queryNoSelect($sql)) {
            header("Location:" . RUTA_APP . "autores");
            exit();
        } else {
            exit("Error al borrar el autor");
        }
    }
}
