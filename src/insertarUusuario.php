
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Insertar usuario</title>
  </head>
  <body>
    <style media="screen">
    body{
      background-color:#FF7F50;
    }
    </style>
    <a href="indice.html">Volver</a>
    <?php
    include '../modelo/consultas.php';
    $consultas = new consultas();
    $resultado=$consultas->insert( $nombre=$_POST['nombre'],$apellidos=$_POST['apellidos'],$edad=$_POST['edad'],$curso=$_POST['curso'])
    
    ?>

  </body>
</html>
