<?php $number = 0; ?>
<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8" />
    <title>Exercice 1/3</title>
  </head>
  <body>
    <p>
      <?php
        while ($number < 10) {
          $number++;
          echo $number . ' ';
        }
/* Autre possibilité : boucle for
  for ($number = 0; $number < 10; $number++) {
    echo $number . ' ';
  }
*\
      ?>
    </p>
  </body>
</html>
