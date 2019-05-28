<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
  <meta charset="utf-8" />
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <title>Exercice 8</title>
</head>
<body>
  <div class="container-fluid text-center">
    <div class="jumbotron jumbotron-fluid">
      <div class="container">
        <h1 class="display-3">Exercice 8 - PHP</h1>
        <h3>Partie 2</h3>
        <p class="lead">Traduire ce code avec des if et des else : echo ($isOk) ? 'c'est ok !!' : 'c'est pas bon !!!';
</p>
      </div>
    </div>
      <!-- Balise signifiant que la suite est en PHP -->
      <?php
        $isOk = false;
        if ($isOk) {
          echo "C'est ok !!! (Ok? = $isOk)";
        } else {
          echo "C'est pas bon !!!(Ok? = $isOk)";
        }
      ?>
  </div>
</body>
</html>
