<?php

class Shop {

    //PROPRIETA'
    protected $name;
    protected $price;

    // METODI
    public function __construct($_name, $_price)
    {
        $this->name = $_name;
        $this->price = $_price;
    }

    public function getName()
    {
        return $this->name;
    } 

    public function getPrice()
    {
        return $this->price;
    } 
}

?>