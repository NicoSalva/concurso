<?php

require_once ('vista/ConcursoView.php');
require_once ('modelo/ConcursoModel.php');
require_once ('modelo/DocenteModel.php');
require_once ('modelo/UsuarioModel.php');



class AdminController
{
  private $vista;
  private $modelo;
  private $usuario;


    function __construct()
    {
      $this->vista=new ConcursoView();
      $this->modelo=new DocenteModel();
      $this->usuario=new UsuarioModel();
    }

    function iniciar () {
    $this->vista->mostrar($this->usuario);
  }





}
?>
