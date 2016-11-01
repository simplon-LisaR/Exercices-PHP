<?php
// header('location:index.php');
// Le programme n’acceptera qu’une seule réponse et affichera le nombre de bonnes réponses après la dernière question.
session_start();
$_SESSION['netherlands'] = "C'est ça ! :-)";
//$_SESSION[''] = "";
$checkPays = $_POST["pays"];
$netherlands = "netherlands";
if ($checkPays===$netherlands) {
  echo $_SESSION['netherlands'];
}else {
  echo 'Faux ! Try again.';
}
 ?>
