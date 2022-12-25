<?php
namespace DesignPattern\exercises\tournament;

include('ITypeTournament.php');
class FemaleTournament implements ITypeTournament
{

    public function getAditionalParameter(){
        return [
            'reactionTime'
        ];
    }

}