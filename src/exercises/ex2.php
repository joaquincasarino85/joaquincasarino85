<?php
/*
Given a string s containing just the characters "(,[,{,),],}" determine if the input string is valid.
An input string is valid if:
O. Open brackets must be closed by the same type of brackets.
O. Open brackets must be closed in the correct order.
Constraints:
1 <= S. Lenath <= 104
s consists of parentheses only

Input: s ="()"
Output: valid

Input: s= "{[()]}"
Output: valid

Input: s= "(]"
Output: invalid

Input: s= "([)]"
Output: invalid

Input: s= "{[]}"
Output: valid
*/

//$s ="()";
//$s ="{[()]}";
//$s ="(]";
//$s ="([)]";
$s ="{[]}";

$arr = str_split($s);

$open = array('(', '[', '{');
$close = array(')', ']', '}');

$res = [];
foreach ($arr as $value) {
    if(in_array($value, $open)){
        $res[] = $value;
    }
    else {
        $k = array_search($value, $close);
        if($open[$k] == end($res)){
            $count = count($res);
            unset($res[$count-1]);
        }
        else{
            exit('no');
        }
    }
}
if(empty($res)){
    exit('si');
}
exit('no');