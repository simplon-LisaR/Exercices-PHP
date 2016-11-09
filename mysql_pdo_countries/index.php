<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Countries & Flags</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
  </head>
  <body style="max-width:50em;margin:0 auto;text-align:center;font-family: 'Roboto', sans-serif;">
    <?php
    try
    {
        include 'pdoconnect.php';
        $test = "SELECT  Nom, Capitales, Drapeaux FROM Pays";
        $test2 = "SELECT  Langages FROM Langues";
    $reponse = $pdo->query($test);
    while ($donnees = $reponse->fetch())
    {
        echo "<h1> $donnees[Nom] </h1>";
        echo "<p>Capitale : $donnees[Capitales]</p>";
        echo "<img src='$donnees[Drapeaux]'/>";
    }
    $reponse = $pdo->query($test2);

    while ($donnees = $reponse->fetch())
    {
        echo "<p>Langue : $donnees[Langages]  </p>";
    }
    $reponse->closeCursor();
    }
    catch(Exception $e)
    {
        die('Erreur : '.$e->getMessage());
    }
    ?>
  </body>
</html>
