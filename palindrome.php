<?php

function Palindrome($s)
{
    $word = str_replace(' ', '', $s);
    $len = strlen($word);
    $isPalindrome = true;
    for ($i=0; $i < $len/2 ; $i++) {
        if (strtolower($word[$i]) != strtolower($word[$len-1-$i])) {
            $isPalindrome = false;
            break;
        }
    }
    if ($isPalindrome) {
        echo("The word \"" . $word . "\" is a Palindrome. <br>");
    } else {
        echo("The word \"" . $word . "\" is NOT a Palindrome. <br>");
    }
}
