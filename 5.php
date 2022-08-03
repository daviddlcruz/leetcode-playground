<?php
/**
 * Longest Palindromic Substring
 * 0|1|2|3|4|5|6
 * a|a|a|b|a|a|a
 * 
 * $l = $s[0]; = a
 * $r = $s[0]; = a
 * 
 * compare left and right
 * $l == $r then it's a palindrome
 * 
 * move one to the left and one to the right
 * 
 * $l = $s[0-1]; = out of bounds then no more palindromes then continue
 * $r = $s[0+1]; = expresion not evalued
 * 
 * move to next character
 * 
 * $l = $s[1];
 * $r = $s[1];
 * 
 * compare left and right
 * $l == $r then it's a palindrome
 * 
 * move one to the left and one to the right
 * 
 * $l = $s[1-1] = $s[0] = a;
 * $r = $s[1+1] = $s[2] = a;
 * 
 * if ($l == $r && $s[1-1] == $s[1+1]) then it's a palindrome
 * 
 * $l = $s[0-1] = out of bounds then no more palindromes then continue
 * $r = $s[0+1] = $s[1] = expression not evalued
 * 
 * move to next character
 * $l = $s[2];
 * $r = $s[2];
 * 
 * compare left and right
 * $l == $r then it's a palindrome
 * 
 * move one to the left and one to the right
 * 
 * $l = $s[2-1] = $s[1] = a;
 * $r = $s[2+1] = $s[3] = b;
 * 
 * if ($l == $r && $s[2-1] == $s[2+1]) then it's not a palindrome
 * 
 */


/**
 * @param String $s
 * @return String
 */
function longestPalindrome($s) {
    $len = strlen($s);

    $palindrome = '';

    for($i = 0; $i < $len; $i++) {
        $l = $i;
        $r = $i;

        $temp = $s[$i];
        $palindrome = strlen($temp) > strlen($palindrome) ? $temp : $palindrome;

        while($l >= 0 || $r < $len) {
            if ($l - 1 < 0) break;
            if ($r + 1 == $len) break;

            if ($s[$l-1] != $s[$r+1]) break;

            $temp = $s[$l-1] . $temp . $s[$r+1];
            $palindrome = strlen($temp) > strlen($palindrome) ? $temp : $palindrome;

            $l--;
            $r++;
        }
    }

    for($i = 0; $i < $len; $i++) {
        $l = $i;
        $r = $i+1;

        if ($s[$l] != $s[$r]) continue;

        $temp = $s[$l].$s[$r];
        $palindrome = strlen($temp) > strlen($palindrome) ? $temp : $palindrome;

        while($l >= 0 || $r < $len) {
            if ($l - 1 < 0) break;
            if ($s[$l-1] != $s[$r+1]) break;

            $temp = $s[$l-1] . $temp . $s[$r+1];
            $palindrome = strlen($temp) > strlen($palindrome) ? $temp : $palindrome;

            $l--;
            $r++;
        }
    }

    return $palindrome;
}
