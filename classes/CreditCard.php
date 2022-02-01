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

        if (date('m,Y') > date($_expirationDate)) {
            throw new Exception("Carta di Credito Scaduta");
        } 
    }

}

?>