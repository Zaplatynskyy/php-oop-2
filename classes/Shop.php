<?php

class Shop {

    //PROPRIETA'
    protected $name;
    protected $category;
    protected $price;

    // METODI
    public function __construct($_name, $_category, $_price)
    {
        $this->name = $_name;
        $this->category = $_category;
        $this->price = $_price;
    }

    public function getName()
    {
        return $this->name;
    } 

    public function getCategory()
    {
        return $this->category;
    } 

    public function getPrice()
    {
        return $this->price;
    } 
}

?>