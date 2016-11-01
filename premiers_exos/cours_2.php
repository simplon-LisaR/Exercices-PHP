<?php
$nom = "Test ";
$somme = 3 + 4;
$hello = "Hello ";
if ($somme > 10) {
  echo "Somme > 10\n";
} else {
  echo "Somme < 10\n";
}
echo $somme > 10 ? "Somme > 10" : "Somme < 10 \n";
$villes = [ 'Lyon', 'Paris', 'Marseille' ];
for ($i=0; $i < 3 ; $i++) {
  echo $villes[ $i ]."\n";
}
$pays = array();
array_push($pays,"France"."\n");
$pays[]= "Italie"."\n";
for ($i=0; $i < count($pays); $i++) {
  echo $pays[ $i ];
}
$contact = [
  [
    "nom" => "Dupont",
    "prenom" => "bob",
    "mail" => "b.dupont@gmail.com",
  ],
  [
    "nom" => "Petit",
    "prenom" => "Jean",
    "mail" => "p.jean@gmail.com",
  ]
];
echo $contact[0]['nom']."\n";
function hello($nom){
    echo 'Hello'."\n".$nom."\n";
}
hello("robert");
function addition($valeur1,$valeur2){
  return $valeur1 + $valeur2."\n";
};
echo "resultat"."\n".addition(5, 7);
function moyenne($notes){

}
$tableaNum = [5, 7, 6, 12, 7];
echo "moyenne : ".array_sum($tableaNum)/count($tableaNum);

 ?>
