<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Bienvenue</title>
  </head>
  <body style="text-align:center; ">
    <h1>PAGE D'ACCUEIL</h1>
    <?php
    session_start();
    if (isset($_POST["EMAIL"] )) {
      echo "Compte créé ! Mail envoyé à ";print_r($_POST["EMAIL"]);
    }
    else{
    echo "Les données n'ont pas été ajoutées.";
    }

    ?>
  </body>
</html>
