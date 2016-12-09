<?php

class PersonaModel extends ConcursoModel
{

  function getPersonas () {
    $sentencia = $this->db->prepare( "select * from persona");
    $sentencia->execute();
    return $sentencia->fetchAll(PDO::FETCH_ASSOC);
  }

  function getPersona($id_persona){
    $sentencia = $this->db->prepare( "select * from persona where id_persona=?");
    $sentencia->execute(array($id_persona));
    return $sentencia->fetch(PDO::FETCH_ASSOC);
  }
  function agregarPersona ($persona) {
    $sentencia = $this->db->prepare("INSERT INTO persona(nombre,mail,area) VALUES(:nombre,:mail,:area)");
    $sentencia->execute($persona);
  }

  function eliminarPaquete ($id_persona) {
    $sentencia = $this->db->prepare("delete from persona where id_persona=?");
    $sentencia->execute(array($id_persona));
  }
}
?>
