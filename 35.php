<?php

function searchInsert($nums, $target) {
    $left = 0;
    $right = count($nums) - 1;
    while ($left <= $right) {
        $mid = floor(($left + $right) / 2);
        if ($nums[$mid] == $target) {
            return $mid;
        } else if ($nums[$mid] < $target) {
            $left = $mid + 1;
        } else {
            $right = $mid - 1;
        }
    }
    return $left;
}

var_dump(searchInsert([1], 1));
var_dump(searchInsert([1,2], 0));
var_dump(searchInsert([1], 2));
var_dump(searchInsert([1,3,5,6,7,8,25], 9));
var_dump(searchInsert([1,3,5,6], 2));
var_dump(searchInsert([1,3,5,6], 7));