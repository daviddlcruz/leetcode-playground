<?php

function searchInsert($nums, $target) {
        
    $curr_arr = $nums;
    
    while(1 < $l = count($curr_arr)) {

        $d = (int) $l/2;
        $m = $l%2;

        $l = array_slice($curr_arr, 0, $d + $m);
        $r = array_slice($curr_arr, $d + $m);

        if ($l[$d+$m-1] < $target && $r[0] > $target) return array_search($r[0], $nums);

        if ($l[$d+$m-1] == $target) return array_search($target, $nums);

        if ($r[0] == $target) return array_search($target, $nums);

        if ($l[$d+$m-1] > $target) $curr_arr = $l;
        else $curr_arr = $r;
    }
    
    $len = count($nums);

    if ($target > $curr_arr[0]) return $len;
    
    return 0;
}

var_dump(searchInsert([1], 1));
// var_dump(searchInsert([1,2], 0));
// var_dump(searchInsert([1], 2));
// var_dump(searchInsert([1,3,5,6,7,8,25], 9));
// var_dump(searchInsert([1,3,5,6], 2));
// var_dump(searchInsert([1,3,5,6], 7));