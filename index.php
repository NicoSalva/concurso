<?php

require('controlador/ConcursoController.php');
require('config/ConfigApp.php');




  if (!array_key_exists(ConfigApp::$ACTION,$_REQUEST)){
    $concursoController = new ConcursoController();
    $concursoController->iniciar();
  die();
}

switch ($_REQUEST[ConfigApp::$ACTION]) {
  case ConfigApp::$ACTION_MOSTRAR_PERSONAS:
  $concursoController->mostrarPersonas();
  break;
}

 ?>
