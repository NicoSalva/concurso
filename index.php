<?php
require ('controlador/ConcursoController.php');
require('controlador/AdminController.php');
require('controlador /UsuarioController.php');
require('config/ConfigApp.php');


$concursoController = new ConcursoController();
$usuariosController = new UsuarioController();

if (!array_key_exists(ConfigApp::$ACTION,$_REQUEST)){
  $concursoController = new ConcursoController($usuariosController);
  $concursoController->iniciar();
  die();
}

 ?>
