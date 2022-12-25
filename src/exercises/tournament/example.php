<?php
namespace DesignPattern\exercises\tournament;

include('Player.php');
include('Tournament.php');
include('MaleTournament.php');

$player = [
    new Player('A', 80, 70, 85, 50),
    new Player('B', 80, 75, 85, 50),
    new Player('C', 60, 70, 85, 50),
    new Player('D', 80, 75, 85, 50), 
    new Player('E', 85, 75, 60, 50), 
    new Player('F', 85, 75, 85, 50), 
    new Player('G', 40, 75, 85, 50), 
    new Player('H', 40, 75, 40, 50),  
];

$draw = new Tournament($player, new MaleTournament());

echo('Cantidad de participantes Torneo masculino: '.count($player));echo("\n");

for ($i=0; $i < $draw->rounds -1; $i++) { 
    $draw->prepareChallengesDraw($i);
    echo('Ronda nro: ');
    echo($i+1);echo("\n");
    foreach ($draw->challenges[$i] as $key => $value) {
        echo($value->p1->name. ' vs '. $value->p2->name);echo("\n");
    }
    
    echo('Ganadores: ');echo("\n");
    $player = [];
    foreach ($draw->challenges[$i] as $key => $value) {
        echo($value->getWinner()->name);echo("\n");
        $player[] = $value->getWinner();
        $draw->player = $player;
    }

}