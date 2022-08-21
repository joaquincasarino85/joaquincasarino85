<?php

include_once('compositeInterface.php');
class Box implements compositeInterface{

    protected $parts = [];

    function add($part){
        $this->parts[] = $part;
    }

    function weight(){

        $weight = 0;
        foreach ($this->parts as $part) {
            $weight+= $part->weight(); 
        }
        return $weight;
    }
}