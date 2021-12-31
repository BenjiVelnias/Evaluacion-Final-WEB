<?php

class Editoriales extends Controlador{
  private $modelo;
  function __construct()
  {
    $this->modelo = $this->modelo("EditorialesModelo");
  }

  public function index(){
    $data = $this->modelo->getEditoriales();
    $this->vista("EditorialesVista",$data);
  }

  public function modificar($id="")
  {
    if ($_SERVER['REQUEST_METHOD']=="POST") {
      $id = isset($_POST["id"])?$_POST["id"]:"";
      $nom_editorial = isset($_POST["nom_editorial"])?$_POST["nom_editorial"]:"";


      $this->modelo->modificarEditoriales($id, $nom_editorial);

    } else {
      $data = $this->modelo->getEditorial($id);
      $datos = [
        "id" => $id,
        "nom_editorial" => $data[0]["nom_editorial"],
      ];
      $this->vista("EditorialesModificar",$datos);
    }
  }

  public function borrar($id="")
  {
   if ($_SERVER['REQUEST_METHOD']=="POST") {
      $id = isset($_POST["id"])?$_POST["id"]:"";

      $this->modelo->borrarEditorial($id);

    } else {
      $data = $this->modelo->getEditorial($id);
      $datos = [
        "id" => $id,
        "nom_editorial" => $data[0]["nom_editorial"],
      ];
      $this->vista("EditorialesBorrar",$datos);
    }
  }

  public function crea()
  {
    if ($_SERVER['REQUEST_METHOD']=="POST") {
      $nom_editorial = isset($_POST["nom_editorial"])?$_POST["nom_editorial"]:"";
      

      $this->modelo->insertarEditoriales($nom_editorial);

    } else {
      $this->vista("EditorialesAlta");
    }
  }
}
?>