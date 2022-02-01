<?php

class User {

    //PROPRIETA'
    protected $name;
    protected $surname;
    protected $creditCard;

    // METODI
    public function getName()
    {
        return $this->name;
    } 

    public function getSurname()
    {
        return $this->surname;
    } 

    public function getCreditCard()
    {
        return $this->creditCard;
    } 
}

?>