<?php

require_once('libs/Smarty.class.php');

class ConcursoView
{
  private $smarty;
  function __construct()
  {
    $this->smarty = new Smarty();
  }

  function mostrar () {
    //$this->smarty->assign('usuario',$usuario);
    $this->smarty->display('index.tpl');
  }

  function mostrarPersonas($personas){
    $this->smarty->assign('persona',$personas);
    $this->smarty->display('index.tpl');
  }
}
 ?>
