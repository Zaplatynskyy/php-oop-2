<?php

class CreditCard {

    //PROPRIETA'

    private $name;
    private $numCard;
    private $expirationDate;

    // METODI

    public function __construct($_name, $_numCard, $_expirationDate)
    {
        $this->name = $_name;
        $this->numCard = $_numCard;
        $this->expirationDate = $_expirationDate;
    }

}

?>