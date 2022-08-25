<?php

/**
 * Given a string s consisting of words and spaces, return the length of the last word in the string.
 */

function lengthOfLastWord($s) {
    $words = preg_split('/\s{1,}/', $s, null, PREG_SPLIT_NO_EMPTY);

    return strlen(end($words));
}

var_dump(lengthOfLastWord('   fly me   to   the moon  '));
var_dump(lengthOfLastWord('luffy is still joyboy'));