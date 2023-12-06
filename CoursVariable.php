<?php
// Déclarer et initialiser une variable contenant le prénom d'une personne
$prenom = "Phong";
echo $prenom;
echo PHP_EOL;
$prenom = "Jean-Paul Polnareff \n";
echo $prenom;
//Déclarer et initialiser une variable contenant résultat de 5 + 8
$nombreUn = 5;
$nombreDeux = 8;
$resultat = $nombreUn + $nombreDeux;
echo $resultat;
echo PHP_EOL;
//Concaténation de chaine : utilisation de l'opérateur
echo "mon prénom est ".$prenom;
echo PHP_EOL;
//Concaténation de chaine : utilisation de l'interpolation
echo "mon prénom est $prenom \n";
$presentation = "je m'appelle $prenom";
echo $presentation;
