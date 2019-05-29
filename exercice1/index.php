<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
  <meta charset="utf-8" />
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <title>Exercice 1</title>
</head>
<body>
  <div class="container-fluid text-center">
    <div class="jumbotron jumbotron-fluid">
      <div class="container">
        <h1 class="display-3">Exercice 1 - PHP</h1>
        <h3>Partie 2</h3>
        <p class="lead">Créer une variable age et l'initialiser avec une valeur.
        Si l'âge est supérieur ou égale à 18, afficher Vous êtes majeur.
        Dans le cas contraire, afficher Vous êtes mineur.</p>
      </div>
    </div>
    <!-- Balise signifiant que la suite est en PHP -->
    <?php
    // Déclaration d'une variable contenant un entier
    $age = 19;
    if ($age < 18) {
      echo 'Vous êtes mineur ! (Age = '.$age.')';
    } else {
      echo 'Vous êtes majeur ! (Age = '.$age.')';
    }
    //prompt function
    // function prompt($prompt_msg){
    //     echo("<script type='text/javascript'> var answer = prompt('".$prompt_msg."'); </script>");
    //     $answer = "<script type='text/javascript'> document.write(+answer); </script>";
    //     echo("<script type='text/javascript'>console.log(+answer); </script>");
    //     return($answer);
    // }
    // //program
    // $prompt_msg = "Entrez votre age :";
    // $age = prompt($prompt_msg);
    // // $age = 19;
    // if (+answer < 18) {
    //   echo "Vous êtes mineur !";
    // } else {
    //   echo "Vous êtes majeur !";
    // }
    // $output_msg = "Hello there ".$name."!";
    // echo($output_msg);
    ?>
  </div>
</body>
</html>
