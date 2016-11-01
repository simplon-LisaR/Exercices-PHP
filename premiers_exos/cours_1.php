<?php
$titrePage = "Mon serveur local : accueil";

 ?>

 <!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title><?php echo $titrePage; ?></title>
  </head>
  <body>

    <?php

    $msg = 'Hello ';
    $nom = 'World ';

    echo "<h1>".$msg."".$nom."</h1>";

    ?>

    <hr>

    <?php
    echo '<a href="http://simplyon2.github.io">Support</a>';
    ?>

<?php

if( isset($nom) ){
?>
 <h2>Bienvenue</h2>
<?php } ?>


  </body>
</html>
