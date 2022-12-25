<?php
namespace DesignPattern\exercises\tournament;
include('Challenge.php');
include('Itournament.php');


class Tournament implements Itournament {

    public array $player;
    public $rounds;
    public array $challenges;
    protected $type;


    function __construct(array $player, ITypeTournament $type){
        $this->player = $player;
        $this->type = $type;
        $this->rounds = count($this->player) / 2;
    }

    public function prepareChallengesDraw($round = 0){
        for ($i=0; $i < count($this->player) ; $i++) { 
            if($i % 2 != 0){
                $this->challenges[$round][] = new Challenge($this->player[$i], $this->player[$i-1], $this->type);
            }
        }
    }
}