<?php

/**
 * ÉNONCÉ :
 * Écrivez une classe nommée Math 
 * Ajouter les méthodes statiques add(), subtract() et multiply().
 * Utilisez ces méthodes pour effectuer des calculs mathématiques sur deux nombres.
 * En dessous de la classe, appeler chaque méthode
 */

 class Math {
    public static function add($a, $b) {
        return $a + $b;
    }

    public static function subtract($a, $b) {
        return $a - $b;
    }

    public static function multiply($a, $b) {
        return $a * $b;
    }

}
 
include 'Math.php';
$nombre1 = 10;
$nombre2 = 5;

$resultatAddition = Math::add($nombre1, $nombre2);
echo "La somme de $nombre1 et $nombre2 est : $resultatAddition\n";

$resultatSoustraction = Math::subtract($nombre1, $nombre2);
echo "La soustraction de $nombre1 et $nombre2 est : $resultatSoustraction\n";

$resultatMultiplication = Math::multiply($nombre1, $nombre2);
echo "La multiplication de $nombre1 et $nombre2 est : $resultatMultiplication\n";
?>