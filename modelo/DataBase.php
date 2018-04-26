<?php
require_once "../config/conexion.php";

class DataBase
{
private $server;
private $user;
private $pass;
private $db;
private $conector;
private $conf;
  function __construct()
  {
    global $config;
    $this->server=$config["server"];
    $this->user=$config["user"];
    $this->pass=$config["pass"];
    $this->db=$config["db"];
  }
  function conectar()
  {
    $conector1 = new mysqli ($this->server,$this->user,
                                  $this->pass,$this->db) ;
    if ($conector1->connect_errno)
    {
      $this->conector=false;
    }
    else
    {
      $this->conector=$conector1;
    }
}
    public function getServer()
    {
        return $this->server;
    }

    public function setServer($server)
    {
        $this->server = $server;

        return $this;
    }

    public function getUser()
    {
        return $this->user;
    }

    public function setUser($user)
    {
        $this->user = $user;

        return $this;
    }

    public function getPass()
    {
        return $this->pass;
    }

    public function setPass($pass)
    {
        $this->pass = $pass;

        return $this;
    }

    public function getDb()
    {
        return $this->db;
    }

    public function setDb($db)
    {
        $this->db = $db;

        return $this;
    }

    public function getConector()
    {
        return $this->conector;
    }


    public function setConector($conector)
    {
        $this->conector = $conector;

        return $this;
    }

    public function getConfig()
    {
        return $this->config;
    }

    public function setConfig($config)
    {
        $this->config = $config;

        return $this;
    }

}
