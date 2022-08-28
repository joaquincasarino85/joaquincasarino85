<?php
namespace DesignPattern\composite;

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

    function parts(){
        return $this->parts;
    }
}