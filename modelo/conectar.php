<?php
require_once "../modelo/DataBase.php";

class conectar
{
  private $db;
  private $conector;
  private $consulta;
  function __construct()
  {
    $this->db=new DataBase();
    $this->db->conectar();
    $this->conector=$this->db->getConector();
  }
public function consultar($query)
{
  $this->consulta=$query;
  $resultado=$this->conector->query($this->consulta);
  return $resultado;
}
}

 ?>
