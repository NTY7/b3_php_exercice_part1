<?php
/*
 * ÉNONCÉ :
 * Créer Product avec les propriétés suivantes en protected
 * - name
 * - price_without_tax
 * - vat_rate
 * Ajouter les getters et setters
 * Ajouter une methode getPriceWithVat() qui va retourner le calcul du prix TTC
 * En dessous la classe instancier un produit et afficher les infos
*/

class Product {
    
    protected $name;
    protected $price_without_tax;
    protected $vat_rate;

    public function __construct($name, $price_without_tax, $vat_rate) {
        $this->name = $name;
        $this->price_without_tax = $price_without_tax;
        $this->vat_rate = $vat_rate;
    }

    
    public function getName() {
        return $this->name;
    }

   
    public function setName($name) {
        $this->name = $name;
    }

    public function getPriceWithoutTax() {
        return $this->price_without_tax;
    }

    public function setPriceWithoutTax($price_without_tax) {
        $this->price_without_tax = $price_without_tax;
    }

    public function getVatRate() {
        return $this->vat_rate;
    }

    public function setVatRate($vat_rate) {
        $this->vat_rate = $vat_rate;
    }

    public function getPriceWithVat() {
        return $this->price_without_tax * (1 + $this->vat_rate / 100);
    }
}

$product = new Product("Produit A", 100, 20);
echo "Nom du produit : " . $product->getName() . "\n";
echo "Prix hors taxe : " . $product->getPriceWithoutTax() . " €\n";
echo "Taux de TVA : " . $product->getVatRate() . " %\n";
echo "Prix toutes taxes comprises : " . $product->getPriceWithVat() . " €\n";

?>