<?php

require_once ('vista/ConcursoView.php');
require_once ('modelo/ConcursoModel.php');
require_once ('modelo/DocenteModel.php');



class AdminController
{
  private $vista;
  private $modelo;


    function __construct()
    {
      $this->vista=new ConcursoView();
      $this->modelo=new DocenteModel();
    }

    function iniciar () {
    $this->vista->mostrar();
  }





}
?>
