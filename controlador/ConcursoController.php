<?php

require_once ('vista/ConcursoView.php');
require_once ('modelo/ConcursoModel.php');
require_once ('modelo/DocenteModel.php');
require_once ('modelo/UsuarioModel.php');

class ConcursoController
{
  private $vista;
  private $modelo;
  private $usuario;

  function __construct()
  {
    $this->vista=new ConcursoView();
    
  }

  function iniciar () {
    $this->vista->mostrar();
  }


}
?>
