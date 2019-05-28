<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
  <meta charset="utf-8" />
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <title>Exercice 4</title>
</head>
<body>
  <div class="container-fluid text-center">
    <div class="jumbotron jumbotron-fluid">
      <div class="container">
        <h1 class="display-3">Exercice 4 - PHP</h1>
        <h3>Partie 2</h3>
        <p class="lead">L'échelle de Richter est un outil de mesure qui permet de définir la magnitude de moment d'un tremblement de terre. Cette échelle va de 1 à 9.
Créer une variable magnitude. Selon la valeur de magnitude, afficher la phrase correspondante.</p>
      </div>
    </div>
      <!-- Balise signifiant que la suite est en PHP -->
      <?php
      $magnitude = 5;
      switch ( (Magnétude = $magnitude) {
          case 1:
              echo "Micro-séisme impossible à ressentir. (Magnétude = $magnitude";
              break;
          case 2:
              echo "Micro-séisme impossible à ressentir mais enregistrable par les sismomètres. (Magnétude = $magnitude";
              break;
          case 3:
              echo "Ne cause pas de dégats mais commence à pouvoir être légèrement ressenti. (Magnétude = $magnitude";
              break;
          case 4:
              echo "Séisme capable de faire bouger des objets mais ne causant généralement pas de dégats. (Magnétude = $magnitude";
              break;
          case 5:
              echo "Séisme capable d'engendrer des dégats importants sur de vieux bâtiments ou bien des bâtiments présentants des défauts de construction. Peu de dégats sur des bâtiments modernes. (Magnétude = $magnitude";
              break;
          case 6:
              echo "Fort séisme capable d'engendrer des destructions majeures sur une large distance (180 km) autour de l'épicentre. (Magnétude = $magnitude";
              break;
          case 7:
              echo " 	Séisme capable de destructions majeures à modérées sur une très large zone en fonction de la distance. (Magnétude = $magnitude";
              break;
          case 8:
              echo "Séisme capable de destructions majeures sur une très large zone de plusieurs centaines de kilomètres. (Magnétude = $magnitude";
              break;
          case 9:
              echo "Séisme capable de tout détruire sur une très vaste zone. (Magnétude = $magnitude";
              break;
      }
    ?>
  </div>
</body>
</html>
