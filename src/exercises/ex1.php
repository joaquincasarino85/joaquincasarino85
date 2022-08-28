<?php
/*
    You have a random array, for example [ 3, 5, 2, 6, 7 ]

    Receive one random number, return true or false 
    depending if that number can be equal to a sum of two differnt values of that array
    Ex: 
        3 => return false
        5 => return true (3+2)
        7 => return true (5+2)
        8 => return true (3+5)

*/


$arr = [];
// random array size
$arraySize = rand(1, 20);

for ($i=0; $i < $arraySize; $i++) {
    //array of values from 1 to 20 
    $arr[] = rand(1, 20);
}

echo 'Array :';
var_dump($arr);
// random value to evaluate 
$n = rand(1,10);
echo "value to evaluate :".$n."\n";


sort($arr);
for ($i=0; ($i!=count($arr) && ($arr[$i]<=$n)); $i++) { 
    # code...
    if(($arr[$i] + $arr[$i+1]) == $n){
        echo 'yes';
        return;
    }
}
echo 'no';
return;