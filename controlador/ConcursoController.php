<?php

require_once ('vista/ConcursoView.php');

define ("INVITADO",0);

class ConcursoController
{
  private $vista;
  private $usuario;

  function __construct($usuariosController)
  {
    $this->vista = new ConcursoView();
    $this->usuario['fk_rol']=INVITADO;
    if($usuariosController->checkLogin()){
      $this->usuario=$usuariosController->getUser();
    }
  }

  function iniciar () {
    $this->vista->mostrar($this->usuario);
  }
}

 ?>
