<?php
namespace DesignPattern\exercises\tournament;

class Player {

    public $name;
    public $expertise;
    public $strength;
    public $speed;
    public $reactionTime;

    function __construct( $name,  $expertise, $strength, $speed, $reactionTime){
        $this->name = $name;
        $this->expertise = $expertise;
        $this->strength = $strength;
        $this->speed = $speed;
        $this->reactionTime = $reactionTime;
    }

    private function getAttribute($attribute){
        return $this->$attribute;
    }
}