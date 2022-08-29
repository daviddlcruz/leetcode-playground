<?php

function plusOne($digits) {
    $len = count($digits);
    $men = 1;
    
    for($i=$len - 1; $i >= 0; $i--) {
        
        if ($digits[$i] < 9) {
            $digits[$i] += 1;
            break;
        }

        $res = $digits[$i] + $men;
        
        $men = floor($res/10);
        
        $digits[$i] = $res % 10;

        if ($i == 0 && $men=1) {
            array_unshift($digits, 1);
        }
    }
    
    return $digits;
}

var_dump(plusOne([1,2,3]));
var_dump(plusOne([4,3,2,1]));
var_dump(plusOne([9]));
var_dump(plusOne([1,0]));
var_dump(plusOne([1,9,9]));
var_dump(plusOne([9,9,9]));