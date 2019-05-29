<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
  <meta charset="utf-8" />
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <title>Exercice 3</title>
</head>
<body>
  <div class="container-fluid text-center">
    <div class="jumbotron jumbotron-fluid">
      <div class="container">
        <h1 class="display-3">Exercice 3 - PHP</h1>
        <h3>Partie 2</h3>
        <p class="lead">Créer deux variables age et gender. La variable gender peut prendre comme valeur :</p>
      </div>
    </div>
    <!-- Balise signifiant que la suite est en PHP -->
    <?php
    //rand: Fonction pour random
    $age = rand(1, 35);
    $gender = 'femme';
    if (($gender == 'femme') && ($age < 18) ) {
        echo 'Vous êtes une femme et vous êtes mineur (Age = '.$age.', Genre = '.$gender.')';
      } elseif (($gender == 'homme') && ($age < 18) ) {
        echo 'Vous êtes un homme et vous êtes mineur (Age = '.$age.', Genre = '.$gender.')';
      } elseif ($gender == 'homme') {
        echo 'Vous êtes un homme et vous êtes majeur (Age = '.$age.', Genre = '.$gender.')';
      } else {
        echo 'Vous êtes une femme et vous êtes majeur (Age = '.$age.', Genre = '.$gender.')';
      }
    // if (($gender == 'femme') && ($age < 18) ) {
    //   // if ($age < 18) {
    //     echo 'Vous êtes une femme et vous êtes mineur (Age = '.$age.', Genre = '.$gender.')';
    //   } else {
    //     echo 'Vous êtes une femme et vous êtes majeur (Age = '.$age.', Genre = '.$gender.')';
    //   }
    // } else {
    //   if (condition) {
    //     if ($age < 18) {
    //       echo 'Vous êtes un homme et vous êtes mineur (Age = '.$age.', Genre = '.$gender.')';
    //     } else {
    //       echo 'Vous êtes un homme et vous êtes majeur (Age = '.$age.', Genre = '.$gender.')';
    //     }
    //   }
    // }
    ?>
  </div>
</body>
</html>
