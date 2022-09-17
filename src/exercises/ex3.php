<?php

/*
Input: ops = ["5","-2","4", "C", "D" "9" "+", "+"]
Output: 27
Explanation:
"5" - Add 5 to the record, record is now [5].
"-2" - Add-2 to the record, record is now [5, -2].
"4" - Add 4 to the record, record is now [5, -2, 4].
"C" - Invalidate and remove the previous score, record is now [5, -2].
"D" - Add 2 * -2 = -4 to the record. record is now [5.-2,-4].
"9" - Add 9 to the record, record is now [5,-2,-4, 9].
"+" - Add -4 + 9 = 5 to the record, record is now [5,-2,-4, 9, 5].
"+" - Add 9 + 5= 14 to the record. record is now [5, -2,-4, 9, 5, 14].
The total cum i9 5 +-7 + -4 + 9 + 5 + 14= 77
*/

$ops = ["5", "-2", "4", "C", "D", "9", "+", "+"];
$res = [];
foreach ($ops as $key => $value) {
    # code...
    var_dump($value);
    switch ($value) {
        case 'C':
            unset($res[count($res)-1]);
            break;
        case 'D':
            $res[] = 2 * end($res);
            break;
        case '+':
            $count = count($res);
            $res[] = end($res) + prev($res);
            break;
        default:
            $res[] = $value;
            break;
    }
}
echo array_sum($res);