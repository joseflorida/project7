
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Listado de usuarios</title>
  </head>
  <body>
    <style media="screen">
    body{
      background-color:#009900;
    }
    </style>

    <a href="indice.html">Volver</a>
    <br>
<?php
include '../modelo/consultas.php';
$consultas = new consultas();
$resultado=$consultas->select();
foreach ($resultado as $fila) {
echo "ID: ".$fila["id"]. "<br>" ;
echo "Nombre: ".$fila["nombre"]. "<br>" ;
echo "Apellido: ".$fila["apellidos"]. "<br>" ;
echo "Edad: ".$fila["edad"]. "<br>" ;
echo "Puntuacion: ".$fila["puntuacion"]. "<br>" ;
echo "Correo: ".$fila["correo"]. "<br>" ;
echo "Curso: ".$fila["curso"]. "<br>" ;
}

 ?>
  </body>
</html>
