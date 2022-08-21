<?php

include_once('compositeInterface.php');
class Product implements compositeInterface{

    protected $weight;

    function __construct($weight){
        $this->weight = $weight;
    }

    function getWeight(){
        return $this->weight;
    }

    function setWeight($weight){
        return $this->weight = $weight;
    }

    function weight(){
        return $this->weight;
    }

}