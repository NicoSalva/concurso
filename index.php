<?php

require('controlador/ConcursoController.php');
require('config/ConfigApp.php');






    $concursoController = new ConcursoController();
    //$concursoController->iniciar();



switch ($_REQUEST[ConfigApp::$ACTION]) {
  case ConfigApp::$ACTION_MOSTRAR_PERSONAS:
  $concursoController->mostrarPersonas();
  break;
//switch ($_REQUEST[ConfigApp::$ACTION]) {
//  case ConfigApp::$ACTION_MOSTRAR_PERSONAS:
//  $concursoController->mostrarPersonas();
//  break;
//}
default:
  $concursoController->iniciar();
  break;
}
 ?>
