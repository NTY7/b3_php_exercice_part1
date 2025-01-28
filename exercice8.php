<?php

/**
 * ÉNONCÉ:
 * Créez une classe Student qui étend Person et ayant pour propriétés 
 * - grades (tableau de notes).
 * Ajoutez une méthode getAverage() qui retourne la moyenne des notes. 
 * Implémentez les getters et setters pour manipuler le tableau de notes.
 * En dessous de la classe, créer un objet et appeler les méthodes
 */

 class Person {
    private $name;
    private $age;

    public function __construct($name, $age) {
        $this->name = $name;
        $this->age = $age;
    }

    public function getName() {
        return $this->name;
    }

    public function setName($name) {
        $this->name = $name;
    }

    public function getAge() {
        return $this->age;
    }

    public function setAge($age) {
        $this->age = $age;
    }
}

class Student extends Person {
    private $grades = [];

    public function __construct($name, $age, $grades = []) {
        parent::__construct($name, $age);
        $this->grades = $grades;
    }

    public function getGrades() {
        return $this->grades;
    }

    public function setGrades(array $grades) {
        $this->grades = $grades;
    }

    public function addGrade($grade) {
        $this->grades[] = $grade;
    }

    public function getAverage() {
        if (count($this->grades) === 0) {
            return 0; 
        }
        $sum = array_sum($this->grades);
        return $sum / count($this->grades);
    }
}
?>