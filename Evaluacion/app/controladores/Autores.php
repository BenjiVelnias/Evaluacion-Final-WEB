<?php

class Autores extends Controlador{
  private $modelo;
  function __construct()
  {
    $this->modelo = $this->modelo("AutoresModelo");
  }

  public function index(){
    $data = $this->modelo->getAutores();
    $this->vista("AutoresVista",$data);
  }

  public function modificar($id="")
  {
    if ($_SERVER['REQUEST_METHOD']=="POST") {
      $id = isset($_POST["id"])?$_POST["id"]:"";
      $nom_autor = isset($_POST["nom_autor"])?$_POST["nom_autor"]:"";


      $this->modelo->modificarAutores($id, $nom_autor);

    } else {
      $data = $this->modelo->getAutor($id);
      $datos = [
        "id" => $id,
        "nom_autor" => $data[0]["nom_autor"]
      ];
      $this->vista("AutoresModificar",$datos);
    }
  }

  public function borrar($id="")
  {
   if ($_SERVER['REQUEST_METHOD']=="POST") {
      $id = isset($_POST["id"])?$_POST["id"]:"";

      $this->modelo->borrarAutor($id);

    } else {
      $data = $this->modelo->getAutor($id);
      $datos = [
        "id" => $id,
        "nom_autor" => $data[0]["nom_autor"]
      ];
      $this->vista("AutoresBorrar",$datos);
    }
  }

  public function crea()
  {
    if ($_SERVER['REQUEST_METHOD']=="POST") {
      $nom_autor = isset($_POST["nom_autor"])?$_POST["nom_autor"]:"";
      

      $this->modelo->insertarAutores($nom_autor);

    } else {
      $this->vista("AutoresAlta");
    }
  }
}
?>