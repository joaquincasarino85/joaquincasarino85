<?php

$words = ['the', 'dog', 'got', 'a', 'bone'];
$letters = 'ae';
/*
Return an array of strings from words that contain at least one letter in $letters.
Output : ['the', 'a', 'bone']
*/
$arr = str_split($letters);
$res = [];
foreach ($words as $wd) {
    for ($i=0; $i < count($arr); $i++) { 
        $letter = $arr[$i];
        if(preg_match("/$letter/", $wd)){
            $res[] = $wd;
            break;
        }
        # code...
    }
}

var_dump($res);