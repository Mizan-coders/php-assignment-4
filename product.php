<?php 

class Product {
    protected $id;
    protected $name;
    protected $price;

    public function __construct($id, $name, $price) {
        $this->id = $id;
        $this->name = $name;
        $this->price = $price;
    }

    public function getFormattedPrice() {
        return '$' . number_format($this->price, 2);
    }

    public function showDetails() {
        echo "Details:\n";
        echo "Product ID: {$this->id}\n";
        echo "Product Name: {$this->name}\n";
        echo "Product Price: {$this->getFormattedPrice()}\n";
    }
}

// Test code for the Product class
$product = new Product(1, 'T-shirt', 19.99);

$product->showDetails();