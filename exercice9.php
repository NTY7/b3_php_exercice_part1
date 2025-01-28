<?php

/**
 * ÉNONCÉ:
 * Créez une classe Movie avec les propriétés 
 * title, genre et ageRestriction. 
 * Ajoutez une méthode canWatch($viewerAge) qui retourne true 
 * si l’âge du spectateur ($viewerAge) est supérieur ou égal à ageRestriction, 
 * sinon false.
  * En dessous de la classe, créer un objet et appeler les méthodes
 */

 class Movie {
    private $title;
    private $genre;
    private $ageRestriction;

    
    public function __construct($title, $genre, $ageRestriction) {
        $this->title = $title;
        $this->genre = $genre;
        $this->ageRestriction = $ageRestriction;
    }

    
    public function canWatch($viewerAge) {
        return $viewerAge >= $this->ageRestriction;
    }


    public function getTitle() {
        return $this->title;
    }

    public function getGenre() {
        return $this->genre;
    }

    public function getAgeRestriction() {
        return $this->ageRestriction;
    }
}
?>

<?php

$film = new Movie("Inception", "Science Fiction", 13);
$ageSpectateur = 15;

if ($film->canWatch($ageSpectateur)) {
    echo "Le spectateur peut regarder " . $film->getTitle() . ".";
} else {
    echo "Le spectateur ne peut pas regarder " . $film->getTitle() . ".";
}
?>

