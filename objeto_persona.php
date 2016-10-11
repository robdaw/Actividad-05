<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
  <!-- Objeto creado por Roberto -->

    <?php
      include 'ClasePersona.php';

      $persona = new ClasePersona();
      $persona->getNombre();
      $persona->getApellido();
      $persona->getEdad();
      $persona->getdni();
    ?>
  </body>
</html>
