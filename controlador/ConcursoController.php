<?php

require_once ('vista/ConcursoView.php');
require_once ('modelo/ConcursoModel.php');
require_once ('modelo/PersonaModel.php');
//require_once ('modelo/UsuarioModel.php');

class ConcursoController
{
  private $vista;
  private $modelo;
  //private $usuario;

  function __construct()
  {
    $this->vista=new ConcursoView();
    $this->modelo=new PersonaModel();
  }

  function iniciar () {
    $this->vista->mostrar();
  }

  function mostrarPersonas(){
    $this->vista->mostrarPersonas($this->modelo->getPersonas());
  }


}
?>
