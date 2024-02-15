<?php

function addition($nombre1, $nombre2) {
    return $nombre1 + $nombre2;
}

function soustraction($nombre1, $nombre2) {
    return $nombre1 - $nombre2;
}

function multiplication($nombre1, $nombre2) {
    return $nombre1 * $nombre2;
}

function division($nombre1, $nombre2) {
    if ($nombre2 != 0) {
        return $nombre1 / $nombre2;
    } else {
        return "Erreur : division par zéro";
    }
}

function racineCarree($nombre) {
    return sqrt($nombre);
}

$nombre1 = 10;
$nombre2 = 5;

$resultat_addition = addition($nombre1, $nombre2);
$resultat_soustraction = soustraction($nombre1, $nombre2);
$resultat_multiplication = multiplication($nombre1, $nombre2);
$resultat_division = division($nombre1, $nombre2);
$resultat_racine_carree = racineCarree($nombre1);

echo "Résultat de l'addition : " . $resultat_addition . "<br>";
echo "Résultat de la soustraction : " . $resultat_soustraction . "<br>";
echo "Résultat de la multiplication : " . $resultat_multiplication . "<br>";
echo "Résultat de la division : " . $resultat_division . "<br>";
echo "Résultat de la racine carrée : " . $resultat_racine_carree . "<br>";
