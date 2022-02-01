<?php

class User {

    //PROPRIETA'
    protected $name;
    protected $surname;
    protected $creditCard = [];

    // METODI

    public function __construct($_name, $_surname, $_creditCard)
    {
        $this->name = $_name;
        $this->surname = $_surname;
        $this->creditCard[] = $_creditCard;
    }

    public function getName()
    {
        return $this->name;
    } 

    public function getSurname()
    {
        return $this->surname;
    } 

    public function setCreditCard($_creditCard)
    {
        $this->creditCard[] = $_creditCard;
    }

    public function getCreditCard()
    {
        return $this->creditCard;
    } 
}

?>