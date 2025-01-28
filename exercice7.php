<?php 

/*
 * ÉNONCÉ:
 * Créez une classe BankAccount avec la propriété balance (solde). 
 * Ajoutez des méthodes deposit($amount) pour déposer de l’argent et withdraw($amount) 
 * pour retirer de l’argent (si le solde est suffisant). 
 * Affichez un message lors de chaque opération.
 * En dessous de la classe, créer un objet et appeler les méthodes
*/

class BankAccount {
    private $balance;

    public function __construct() {
        $this->balance = 0; 
    }
}

public function deposit($amount) {
    if ($amount > 0) {
        $this->balance += $amount; /
        echo "Dépôt de $amount effectué. Nouveau solde: " . $this->balance . " €.\n";
    } else {
        echo "Le montant du dépôt doit être positif.\n";
    }
}

public function withdraw($amount) {
    if ($amount > 0) {
        if ($this->balance >= $amount) {
            $this->balance -= $amount; 
            echo "Retrait de $amount effectué. Nouveau solde: " . $this->balance . " €.\n";
        } else {
            echo "Fonds insuffisants pour retirer $amount €. Solde actuel: " . $this->balance . " €.\n";
        }
    } else {
        echo "Le montant du retrait doit être positif.\n";
    }
}

$monCompte = new BankAccount();


$monCompte->deposit(100); 
$monCompte->deposit(50);  

$monCompte->withdraw(30); 
$monCompte->withdraw(150); 
?>