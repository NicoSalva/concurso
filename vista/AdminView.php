<?php
require_once('libs/Smarty.class.php');


class AdminView
{
  private $smarty;

  function __construct(){

    $this->smarty = new Smarty();

  }

  function listarDocentes($docentes){
    $this->smarty->assign('docentes',$docentes);
    $this->smarty->display('listarDocentes.tpl');
  }

  function mostrarLogin(){
    $this->smarty->display('login.tpl');
  }

  function mostrar () {
    $this->smarty->display('administracion.tpl');
  }

  function mostrarPaquetes($paquetes){
    $this->smarty->assign('paquetes',$paquetes);
    $this->smarty->display('adminPaquetes.tpl');
  }

  function mostrarUsuarios ($usuarios,$adminActivo) {
    $this->smarty->assign('adminActivo',$adminActivo);
    $this->smarty->assign('usuarios',$usuarios);
    $this->smarty->display('adminUsuarios.tpl');
  }
}
?>
