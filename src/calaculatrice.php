<?php
// FILEPATH: /Users/armel/workspace/my-digital-school-plugin/src/calaculatrice.php

// Fonction pour effectuer une addition
function addition($a, $b) {
    return $a + $b;
}

// Fonction pour effectuer une soustraction
function soustraction($a, $b) {
    return $a - $b;
}

// Fonction pour effectuer une multiplication
function multiplication($a, $b) {
    return $a * $b;
}

// Fonction pour effectuer une division
function division($a, $b) {
    if ($b != 0) {
        return $a / $b;
    } else {
        return "Erreur : division par zéro";
    }
}

// Utilisation des fonctions
$a = 10;
$b = 5;

$resultat_addition = addition($a, $b);
$resultat_soustraction = soustraction($a, $b);
$resultat_multiplication = multiplication($a, $b);
$resultat_division = division($a, $b);

echo "Résultat de l'addition : " . $resultat_addition . "<br>";
echo "Résultat de la soustraction : " . $resultat_soustraction . "<br>";
echo "Résultat de la multiplication : " . $resultat_multiplication . "<br>";
echo "Résultat de la division : " . $resultat_division . "<br>";
?>
