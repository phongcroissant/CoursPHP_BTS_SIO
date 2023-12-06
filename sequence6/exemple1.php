<?php

// Déclaration d'un tableau indexé bi-dimensionnel
// dont les valeurs sont des tableaux indexés d'entiers
// Chaque valeur peut être un tableau de taille différente
$tab = [
    [1, 2, 3],
    [4, 5, 6],
    [7, 8, 9, 10]
];

// Afficher une valeur particulière du tableau
echo "-------------------------------------" . PHP_EOL;
// On a besoin de 2 index pour accéder à une valeur du tableau
// -> tableau bi-dimensionnel
echo $tab[0][1].PHP_EOL;
// Afficher toutes les valeurs du tableau
echo "-------------------------------------" . PHP_EOL;
foreach($tab as $ligne) {
    // $ligne est un tableau
    foreach ($ligne as $valeur) {
        echo $valeur." ";
    }
    echo PHP_EOL;
}

// Afficher tous les éléments (index et valeur) du tableau
echo "-------------------------------------" . PHP_EOL;
foreach ($tab as $index => $ligne) {
    foreach ($ligne as $index2 => $valeur) {
        echo "tab[$index][$index2]=".$valeur.PHP_EOL;
    }
}