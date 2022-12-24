<?php

$arr = [ 3, 5, 2, 6, 7 , 0];
$number = 7;
/*
Return an array of pair keys that their values sum number
Example above output: [[1,2], [4,5]]
*/

$res = [];
for ($i=0 ; $i != count($arr) ; $i++ ) { 
    # code...
    for ($j= $i+1; $j != count($arr); $j++) { 
        if( ($arr[$i] + $arr[$j]) == $number){
            $res[] = array($i, $j);
        }
    }
}

var_dump($res);