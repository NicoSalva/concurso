<?php

require_once('libs/Smarty.class.php');

class ConcursoView
{
  private $smarty;
  function __construct()
  {
    $this->smarty = new Smarty();
  }

  function mostrar ($usuario) {
    $this->smarty->assign('usuario',$usuario);
    $this->smarty->display('index.tpl');
  }
}
 ?>
