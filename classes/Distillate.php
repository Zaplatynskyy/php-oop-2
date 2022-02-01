<?php

class Distillate extends Shop {

    //PROPRIETA'
    
    protected $type;
    protected $brand;
    protected $alcohol;

    // METODI
    public function __construct($_name,$_category, $_price, $_type ,$_brand , $_alcohol)
    {
        parent::__construct($_name,$_category, $_price);
        
        $this->alcohol = $_alcohol;
        $this->brand = $_brand;
        $this->type = $_type;
    }

    public function getType()
    {
        return $this->type;
    }

    public function getBrand()
    {
        return $this->brand;
    } 

    public function getAlcohol()
    {
        return $this->alcohol;
    } 

}