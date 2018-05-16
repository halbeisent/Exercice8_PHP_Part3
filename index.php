<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="style.css" />
    <title>Exercice 8 Partie 3 PHP</title>
  </head>
  <body>
    <?php
    // On initialise la variable $count à 200
          $count = 200;
          while ($count >= 0) { //Tant que sa valeur est supérieure ou égale à 0,
            echo 'Enfin!!! <br />'; //On affiche ce message,
            $count-=12; //Puis on décrémente la variable de 12 (équivalent à $count = $count+12)
            var_dump($count); //Utilisé pour diagnostic
          }
          ?>
  </body>
</html>
