<?php
namespace DesignPattern\exercises\tournament;

class Challenge {

    public $p1;
    public $p2;
    protected $type;
    protected $defaultDesisionAttribute = 'expertise' ;

    function __construct(Player $p1, Player $p2, ITypeTournament $type){
        $this->p1 = $p1;
        $this->p2 = $p2;
        $this->type = $type;

    }

    public function getWinner(){
        if($this->similarAttribute($this->defaultDesisionAttribute)){

            $attr = $this->type->getAditionalParameter();
            foreach ($attr as $value) {
                return $this->evaluate($value);
            }

        }
        else {
            return $this->evaluate($this->defaultDesisionAttribute);
        }
    }

    public function similarAttribute($attribute){
        return intval($this->p1->{$attribute}) == intval($this->p2->{$attribute});
    }

    public function evaluate($attribute){
        if($this->p1->{$attribute} > $this->p2->{$attribute}){
            return $this->p1;
        }
        return $this->p2;
    }
}