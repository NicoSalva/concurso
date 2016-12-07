<?php

require('controlador/ConcursoController.php');
require('config/ConfigApp.php');


  $concursoController = new ConcursoController();
  $concursoController->iniciar();

 ?>
