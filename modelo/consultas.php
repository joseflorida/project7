<?php
require_once "../modelo/conectar.php";

class consultas extends conectar
{
  function construct()
  {
    parent::conectar();
  }
  public function select()
  {
    return parent::consultar("SELECT * FROM Usuarios ");
  }
  public function insert($nombre,$apellidos,$edad, $curso)
  {
 return parent::consultar("INSERT INTO Usuarios (nombre, apellidos, edad,curso)
       VALUES ('$nombre','$apellidos',$edad,$curso)");
  }
  public function update($id,$nombre,$apellidos,$edad, $curso)
  {
     return parent::consultar("UPDATE  Usuarios SET id ='$id', nombre='$nombre',apellidos='$apellidos',edad='$edad',curso='$curso'
             WHERE id='$id'");
  }
  public function delete ($id)
  {
      ;
       return parent::consultar("DELETE FROM Usuarios WHERE id='$id'");
  }
}
 ?>
