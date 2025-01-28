<?php

/**
 * ÉNONCÉ :
 * Écrivez une classe PHP nommée ShoppingCart avec les propriétés 
 * - items (sous forme de tableau)
 * - total.
 * Implémentez une méthode pour ajouter des articles au panier 
 * (chaque article sera dans un tableau avec name et price) 
 * Implémentez une méthode pour afficher tous les items.
 * Implémentez une méthode pour calculer le coût total.
 * En dessous de la classe, créer un objet et appeler vos méthodes
 */
class ShoppingCart {
    private $items = []; 
    private $total = 0;  


    public function addItem($name, $price) {
        if ($price < 0) {
            throw new InvalidArgumentException("Le prix ne peut pas être négatif.");
        }

        $this->items[] = [
            'name' => $name,
            'price' => $price
        ];

        $this->total += $price;
    }

    public function displayItems() {
        if (empty($this->items)) {
            echo "Le panier est vide.\n";
            return;
        }

        echo "Articles dans le panier :\n";
        foreach ($this->items as $item) {
            echo "- " . $item['name'] . " : " . number_format($item['price'], 2) . " €\n";
        }
    }

    public function calculateTotal() {
        return number_format($this->total, 2) . " €";
    }
}

$panier = new ShoppingCart();

$panier->addItem("Pomme", 0.50);
$panier->addItem("Pain", 1.20);
$panier->addItem("Lait", 0.80);

$panier->displayItems();

echo "Coût total : " . $panier->calculateTotal() . "\n";

?>