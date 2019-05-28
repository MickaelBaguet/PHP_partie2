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
        <p class="lead">Créer une variable isEasy de type booléan et l'initialiser avec une valeur.
Afficher C'est facile!! si c'est vrai. Dans le cas contraire afficher C'est difficile !!!.
Bonus : L'écrire de deux manières différentes.</p>
      </div>
    </div>
    <!-- Balise signifiant que la suite est en PHP -->
    <?php
    $age = 20 ;
    $gender = "femme";
    if ($gender == "femme") {
      if ($age < 18) {
        echo "Vous êtes une femme et vous êtes mineur (Age = $age, Genre = $gender)";
      } else {
        echo "Vous êtes une femme et vous êtes majeur (Age = $age, Genre = $gender)";
      }
    } else {
      if (condition) {
        if ($age < 18) {
          echo "Vous êtes un homme et vous êtes mineur (Age = $age, Genre = $gender)";
        } else {
          echo "Vous êtes un homme et vous êtes majeur (Age = $age, Genre = $gender)";
        }
      }
    }
    ?>
  </div>
</body>
</html>
