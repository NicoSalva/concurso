<?php

abstract class ConcursoModel{
  protected $db;
  function __construct() {
      $this->db = new PDO('mysql:host=localhost;dbname=concurso;charset=utf8', 'root', '');
    }

  
  }

?>
