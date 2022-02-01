<?php

class Book extends Shop {

    //PROPRIETA'

    protected $author;
    protected $year;
    protected $pages;

    // METODI
    public function __construct($_name,$_category, $_price, $_author, $_year, $_pages)
    {
        parent::__construct($_name,$_category, $_price);
        
        $this->author = $_author;
        $this->year = $_year;
        $this->pages = $_pages;
    }

    public function getAuthor()
    {
        return $this->author;
    } 

    public function getYear()
    {
        return $this->year;
    } 

    public function getPages()
    {
        return $this->pages;
    } 

}


?>