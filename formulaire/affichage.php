<!DOCTYPE html>
<html>
 <head>
   <meta charset="utf-8">
   <title>Réponse ville</title>
 </head>
 <body>

<?php
// récupérer variable transmise $_GET
$nom = isset($_POST['nom']) //GET ne prend en compte que très peu de caractères, possibilité de mettre "POST" à la place
? $_GET['nom'] :
'non renseigné';
echo "<h1>votre nom est : ".$nom."</h1>";
 ?>

 </body>
</html>
