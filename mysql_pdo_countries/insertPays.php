<?php
if(isset($_POST["submit"])){
include 'pdoconnect.php';
$sql = "INSERT INTO Pays (Nom, Capitales, Drapeaux) VALUES ('".$_POST["Nom"]."','".($_POST["Capitale"])."','".($_POST["Drapeau"])."');
INSERT INTO Langues (Langages) VALUES ('".($_POST["NomLangue"])."');
COMMIT;";
if ($pdo->query($sql)) {
echo "Vous êtes maintenant enregistré";
}
else{
echo "Les donnés n'ont pas été ajoutés.";
}
}
?>
