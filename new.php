<?php

class Product{
    //properites
    private $id;
    private $name;
    private $price;


    //construct

    public function __construct($id, $name, $price){
        $this->id =$id;
        $this->name = $name;
        $this->price =$price; 
    }
    //method to get the formatted price
    public function getFormattedPrice(){
        return '$' . number_format($this->price, 2);
    }

    //method to show the product details
    public function showDetails(){
        echo "Product Details:\n";
        echo "-ID: " . $this->id . "\n";
        echo "-Name: " . $this->name . "\n";
        echo "-Price: " . $this->getFormattedPrice() . "\n";
    }

    


}

//Test the product class
$product = new Product (1, 'T-shirt', 19.99);
$product->showDetails();