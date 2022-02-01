<?php

    class UserPremium extends User {

        //PROPRIETA'

        protected $premiumPoints;
        protected $discount = 10;

        // METODI

        public function __construct($_name, $_surname, $_creditCard, $_premiumPoints)
        {
            parent::__construct($_name, $_surname, $_creditCard);
            $this->premiumPoints = $_premiumPoints;
        }

        public function setPremiumPoints($_premiumPoints)
        {
            $this->premiumPoints = $_premiumPoints;

            if($_premiumPoints >= 500) {
                $this->discount = 30;

                if($_premiumPoints >= 1000) {
                    $this->discount = 50;
                }

            } 
        }

        public function getPremiumPoints()
        {
            return $this->premiumPoints;
        }

        public function getDiscount()
        {
            return $this->discount;
        }
    }

?>