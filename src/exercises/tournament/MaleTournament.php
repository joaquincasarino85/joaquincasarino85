<?php
namespace DesignPattern\exercises\tournament;

include('ITypeTournament.php');
class MaleTournament implements ITypeTournament{

    public function getAditionalParameter(){
        return [
            'strength',
            'speed'
        ];
    }

}