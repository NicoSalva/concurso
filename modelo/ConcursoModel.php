<?php

abstract class ConcursoModel{
  protected $db;
  function __construct() {
      $this->db = new PDO('mysql:host=localhost:8080;dbname=concurso;charset=utf8', 'root', '');
    }


  }

?>
