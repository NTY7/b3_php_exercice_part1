<?php
/*
 * ÉNONCÉ :
 * Créer une classe Stats
 * Ajouter une méthode static average() avec comme paramètre
 * - array $array, float $min, float $max
 * Cette méthode doit retourner la moyenne uniquement des valeurs comprises entre min et max
 * Appeler cette méthode avec le tableau suivant
 * $bodyTemparatures = [36.5, 37.8, 36.2, 38.5, 20.4, 40.5, 62.4, 37.4]
 * Inclure uniquement dans le calcul de la moyenne les valeurs comprise 32 et 45
 * Appeler la classe en passant les valeurs en paramètre
*/

class Stats {
    public static function average(array $array, float $min, float $max): float {
        $filteredValues = array_filter($array, function($value) use ($min, $max) {
            return $value >= $min && $value <= $max;
        });

        if (count($filteredValues) === 0) {
            return 0; 
        }

        $sum = array_sum($filteredValues);
        $average = $sum / count($filteredValues);

        return $average;
    }
}

$bodyTemperatures = [36.5, 37.8, 36.2, 38.5, 20.4, 40.5, 62.4, 37.4];

$result = Stats::average($bodyTemperatures, 32, 45);

echo "La moyenne des températures comprises entre 32 et 45 est : " . $result;
?>