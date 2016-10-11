<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
  <!-- Objeto creado por Javi -->

    <?php
      include 'ClaseViolin.php';

      $violin1 = new ClaseViolin();
      $violin1->getColor();
      $violin1->getTamanyo();
      $violin1->getPrecio();
      $violin1->getTensores();
    ?>
  </body>
</html>
